<?php 

namespace ActivismBE\Artisan\Exceptions;

use InvalidArgumentException;

/**
 * Class MakeUserException
 * 
 * @package ActivismBE\Artisan\Exceptions
 */
class MakeUserException extends InvalidArgumentException
{
    /**
     * The supplied email is invalid. 
     * 
     * @param  string $email The given user email in the command. 
     * @return MakeUserException
     */
    public static function invalidEmail(string $email): MakeUserException
    {
        return new static("The email address [{$email}] is invalid");
    }

    /**
     * The supplied amil already exists in the storage. 
     * 
     * @param  string $email The given user email in the command. 
     * @return MakeUserException 
     */
    public static function emailExists(string $email): MakeUserException
    {
        return new static("A user with the email address {$email} already exists");
    }
}
