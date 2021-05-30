<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();
        $insert_data = [
            'name' => 'elon',
            'email' => 'log.matty@gmail.com',
            'password' => 'password',

        ];
        //User::create($insert_data);
        $user = User::all();
        return $user;
        //return view('home');
    }
}
