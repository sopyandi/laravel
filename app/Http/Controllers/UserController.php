<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function shortby_user(User $username)
    {
        return view('/blog', [
           'title'=>'Short By Username',
           'blog'=>$username->Posting

        ]);
    }
}
