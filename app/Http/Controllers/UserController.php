<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function store(UsersRequest $request)
    {
        return User::create($request->all());
    }

    public function update(UsersRequest $request, User $user)
    {
        $user->update($request->all());
        return $user;
    }

    public function show(User $user)
    {
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $user;
    }

}
