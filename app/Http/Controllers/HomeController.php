<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function layout(){
        return view('layout.app');
    }

    public function dashboard(){
        return view('sidebar.dashboard');
    }

    public function login(){
        return view('login');
    }

    // public function home(){
    //     return view('home');
    // }

    public function register(){
        return view('register');
    }

    public function create(){
        return view('crud.create');
    }

}