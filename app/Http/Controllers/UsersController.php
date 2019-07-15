<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class UsersController extends Controller
{
    public function showProfil (Guard $auth) {
        $user = $auth->user();
        return view('users.profile', compact('user'));
    }
}
