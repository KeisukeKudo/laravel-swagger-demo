<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserShowRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(UserShowRequest $request, $id)
    {
        return User::find($id);
    }
}
