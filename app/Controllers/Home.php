<?php

namespace App\Controllers;

use App\Models\MovieModel;

class Home extends BaseController
{
    protected $movieModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }
    public function index()
    {
        $data = [
            'title' => 'IntiFilm',
            'addActive' => 'home',
            'movies' => $this->movieModel->findAll()
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
