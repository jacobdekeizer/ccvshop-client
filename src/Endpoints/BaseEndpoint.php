<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use DateTime;
use DateTimeInterface;
use DateTimeZone;
use GuzzleHttp\Psr7\Request;
use JacobDeKeizer\Ccv\Client;
use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use Throwable;

class BaseEndpoint
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @throws CcvShopException
     */
    protected function doRequest(
        string $httpMethod,
        string $resource,
        ?array $data = null,
        array $requestHeaders = []
    ): array {
        $apiRoute = $this->client::API_ENDPOINT . $this->client::API_VERSION . '/' . $resource;

        /** @noinspection PhpUnhandledExceptionInspection */
        $timestamp = (new DateTime('now', new DateTimeZone('UTC')))->format(DateTimeInterface::ISO8601);

        $postData = json_encode($data);

        $hashString = sprintf(
            '%s|%s|%s|%s|%s',
            $this->client->getPublicKey(),
            $httpMethod,
            $apiRoute,
            $data !== null ? $postData : null,
            $timestamp
        );

        $requestHeaders = array_merge($requestHeaders, [
            'x-public' => $this->client->getPublicKey(),
            'x-date' => $timestamp,
            'x-hash' => hash_hmac('sha512', $hashString, $this->client->getPrivateKey()),
            'Accept' => 'application/json'
        ]);

        $httpBody = null;

        if ($data !== null) {
            $requestHeaders['Content-Type'] = 'application/json';
            $httpBody = $postData;
        }

        $request = new Request($httpMethod, $apiRoute, $requestHeaders, $httpBody);

        try {
            $response = $this->client->getClient()->send($request, ['http_errors' => false]);
        } catch (Throwable $e) {
            throw CcvShopException::fromPrevious('Error connecting to api: ' . $e->getMessage(), $e);
        }

        if (!$response) {
            throw new CcvShopException('No api response received.');
        }

        $body = $response->getBody()->getContents();

        if (empty($body)) {
            $object = [];
        } else {
            try {
                $object = json_decode($body, true, 512, JSON_THROW_ON_ERROR | JSON_OBJECT_AS_ARRAY);
            } catch (Throwable $throwable) {
                throw CcvShopException::fromPrevious('Unable to decode api response: ' . $body, $throwable);
            }
        }

        if ($response->getStatusCode() >= 400) {
            // todo introduce new exception with more details
            throw new CcvShopException(
                'Error executing api call: ' . ($object['developermessage'] ?? '')
                . ', StatusCode: ' . $response->getStatusCode(),
                $response->getStatusCode()
            );
        }

        return $object;
    }
}
