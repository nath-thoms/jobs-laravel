<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TaskController extends Controller
{
    public function index() {
        
        //dd($usr->name);
        //return view('home',compact('usr'));

        $user = User::paginate(10);
        //return $user;
        return view('home',compact('user'));
    }
}
