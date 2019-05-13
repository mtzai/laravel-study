<?php
namespace App\Traits;

trait RegistersUsers
{
    public static function redirectPath(){
        return 'RegistersUsers redirectPath';
    }

    public static function getGuard(){
        return 'RegistersUsers getGuard';
    }
}