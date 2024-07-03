<?php

namespace App\Controllers;

use App\Models\MovieModel;

class Movie extends BaseController
{
    protected $movieModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }

    public function detail($slug)
    {
        $detailMovie = $this->movieModel->where(['slug' => $slug])->first();
        $data = [
            'title' => 'IntiFilm | ' . $detailMovie['title'],
            'addActive' => 'home',
            'detailMovie' => $detailMovie
        ];
        return view('movie/detail', $data);
    }
}
