<?php

namespace Infrastructure\Validators;

class EmailValidator
{
    public static function validate(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
