<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about', [
            "active" => "about",
            "title" => "About",
            "name" => "Al Farazy",
            "email" => "sidorukun0@gmail.com",
            "image" => "ifal.jpg"
        ]);
    }
}
