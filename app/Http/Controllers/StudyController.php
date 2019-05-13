<?php

namespace App\Http\Controllers;

use App\Traits\AuthenticatesAndRegistersUsers;
use App\Traits\ThrottlesLogin;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    use ThrottlesLogin, AuthenticatesAndRegistersUsers;
    public function testTrait()
    {
        return $this->xufei();
    }

    public function testAuthenticatesAndRegistersUsers(){
        return $this->redirectPath();
    }
}
