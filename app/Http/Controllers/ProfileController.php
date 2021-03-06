<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{

    public function getProfile($name)
    {
        $user = User::where('name', $name)->first();

        if (!$user) {
            abort(404);
        }

        return view('profile.index')->with('user', $user);
    }

}
