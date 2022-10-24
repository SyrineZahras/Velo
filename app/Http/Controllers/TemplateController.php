<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index() {
        return view('backend.master');
    }

    public function home() {
        return view('home.master');
    }

    public function frontend() {
        return view('frontend.master');
    }
    public function login() {
        return redirect()->route('login');
    }

}
