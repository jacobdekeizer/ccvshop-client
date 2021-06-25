<?php

declare(strict_types=1);

namespace JacobDeKeizer\CcvGenerator\Writers;

class CodeWriter
{
    public const INDENTATION = '    ';

    /** @var string[] */
    private $lines = [];
    private $currentIndentation = '';

    public function startPhpFile(string $namespace): void
    {
        $this->writeLine('<?php');
        $this->insertNewLine();
        $this->writeLine('declare(strict_types=1);');
        $this->insertNewLine();
        $this->writeLine('namespace ' . $namespace . ';');
        $this->insertNewLine();
    }

    public function useClass(string $class): void
    {
        $this->writeLine('use ' . $class . ';');
    }

    public function openClass(string $class): void
    {
        $this->writeLine($class);
        $this->writeLine('{');
        $this->indent();
    }

    public function closeClass(): void
    {
        $this->outdent();
        $this->writeLine('}');
        $this->insertNewLine();
    }

    public function writeMultilineDocblock(array $lines): void
    {
        $this->writeLine('/**');
        foreach ($lines as $line) {
            $this->writeLine(' * ' . $line);
        }
        $this->writeLine(' */');
    }

    public function openMethod(string $method): void
    {
        $this->writeLine($method);
        $this->writeLine('{');
        $this->indent();
    }

    public function closeMethod(): void
    {
        $this->outdent();
        $this->writeLine('}');
    }

    public function insertNewLine(): void
    {
        $this->writeLine('');
    }

    public function writeLine(string $line): void
    {
        $this->lines[] = $this->currentIndentation . $line;
    }

    public function writeLines(array $lines): void
    {
        foreach ($lines as $line) {
            $this->writeLine($line);
        }
    }

    public function indent(): void
    {
        $this->currentIndentation .= self::INDENTATION;
    }

    public function outdent(): void
    {
        $this->currentIndentation = substr(
            $this->currentIndentation,
            0,
            strlen($this->currentIndentation) - strlen(self::INDENTATION)
        );
    }

    public function content(): string
    {
        return implode(PHP_EOL, $this->lines);
    }
}