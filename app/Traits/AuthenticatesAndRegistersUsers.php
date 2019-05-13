<?php
namespace App\Traits;

trait AuthenticatesAndRegistersUsers
{
    use AuthenticatesUsers,RegistersUsers{
        AuthenticatesUsers::redirectPath insteadof RegistersUsers;
        AuthenticatesUsers::getGuard insteadof  RegistersUsers;
    }
}