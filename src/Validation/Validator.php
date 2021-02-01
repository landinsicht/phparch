<?php declare(strict_types=1);

namespace J6s\PhpArch\Validation;

interface Validator
{

    public function isValidBetween(string $from, string $to): bool;

    /** @return string[] */
    public function getErrorMessage(string $from, string $to): array;
}
