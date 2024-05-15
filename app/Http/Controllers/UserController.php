<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return View('site.register');
    }
    public function recover(){
        return View('site.recover');
    }
    public function login(){
        return View('site.login');
    }
    public function logout(){
        return View('site.logout');
    }
}
