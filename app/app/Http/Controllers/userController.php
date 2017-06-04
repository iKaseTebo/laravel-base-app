<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   public function getUsers()
    {
        $users = DB::table('users')->get();
        foreach ($users as $user){
            echo $user->username;
        }
    }
}