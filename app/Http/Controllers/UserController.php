<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\group;

class UserController extends Controller
{
    /**
     * プロフィールページの表示
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($userId)
    {
        $userId = intval($userId);

        $user = User::findOrFail($userId);

        $user->groups()->attach($request->group_id);
    }
}
