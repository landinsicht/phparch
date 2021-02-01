<?php declare(strict_types=1);

namespace J6s\PhpArch\Validation;

class AllowInterfaces implements Validator
{

    protected Validator $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function isValidBetween(string $from, string $to): bool
    {
        if (interface_exists($to)) {
            return true;
        }
        return $this->validator->isValidBetween($from, $to);
    }

    public function getErrorMessage(string $from, string $to): array
    {
        return $this->validator->getErrorMessage($from, $to);
    }
}
