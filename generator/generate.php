<?php

declare(strict_types=1);

include_once 'vendor/symfony/polyfill-php80/bootstrap.php';
include_once 'vendor/autoload.php';

use JacobDeKeizer\CcvGenerator\Generator\SchemaGenerator;

SchemaGenerator::generateAll();
