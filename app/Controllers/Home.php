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
        // $data = [
        //     [
        //         'title' =>  'Despicable Me 4',
        //     ],
        //     [
        //         'title' =>  'Ipar adalah Maut',
        //     ],
        // ];
        // $data = [];
        // function getData($title)
        // {
        //     $slug = strtolower(url_title($title, '-'));
        //     return ['title' => $title, 'slug' => $slug, 'created_at' => 2];
        // }
        // array_push($data, getData('Despicable Me 4'));
        // array_push($data, getData('Ipar adalah Maut'));
        // return var_dump($data);
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
