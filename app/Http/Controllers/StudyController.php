<?php

namespace App\Http\Controllers;

use App\Traits\ThrottlesLogin;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    use ThrottlesLogin;
    public function testTrait()
    {
        return $this->xufei();
    }
}
