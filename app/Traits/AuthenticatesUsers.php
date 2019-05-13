<?php
namespace App\Traits;

trait AuthenticatesUsers
{
    public static function redirectPath(){
        return 'AuthenticatesUsers redirectPath';
    }

    public static function getGuard(){
        return 'AuthenticatesUsers getGuard';
    }
}