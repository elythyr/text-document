<?php

namespace Phpactor\TextDocument;

class TextDocumentLanguage
{
    const LANGUAGE_UNDEFINED = 'undefined';
    const LANGUAGE_PHP = 'php';

    /**
     * @var string
     */
    private $language;

    private function __construct(string $language)
    {
        $this->language = $language;
    }

    public static function fromString(string $language): self
    {
        return new self($language);
    }

    public static function undefined(): self
    {
        return new self(self::LANGUAGE_UNDEFINED);
    }

    public function is(string $language): bool
    {
        return $this->language === strtolower($language);
    }

    public function in(array $languages): bool
    {
        return in_array($this->language, $languages);
    }

    public function isDefined(): bool
    {
        return !$this->is(self::LANGUAGE_UNDEFINED);
    }

    public function isPhp(): bool
    {
        return $this->is(self::LANGUAGE_PHP);
    }

    public function __toString(): string
    {
        return $this->language;
    }
}
