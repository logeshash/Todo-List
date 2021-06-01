<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function uploadAvatarImage(Request $request)
    {
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            $request->session()->flash('message', 'Image uploaded.'); //success message
            return redirect()->back();
        }
        $request->session()->flash('error', 'Image not uploaded.'); //error message
        return redirect()->back();
    }

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
