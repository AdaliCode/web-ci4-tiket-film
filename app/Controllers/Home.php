<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'IntiFilm',
            'addActive' => 'home'
        ];
        return view('home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'IntiFilm | about',
            'addActive' => 'about'
        ];
        return view('about', $data);
    }
    public function blog()
    {
        $data = [
            'title' => 'IntiFilm | Blog',
            'addActive' => 'blog'
        ];
        return view('blog', $data);
    }
}
