<?php

namespace App\Controllers;

use App\Models\MovieModel;

use function PHPUnit\Framework\isNull;

class Movie extends BaseController
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
            'movies' => $this->movieModel->paginate(10, 'movie'),
            'pager' => $this->movieModel->pager,
        ];
        return view('movie/index', $data);
    }

    public function detail($slug)
    {
        $detailMovie = $this->movieModel->casts()->where(['slug' => $slug])->first();
        if (!isset($detailMovie)) {
            $detailMovie = $this->movieModel->where(['slug' => $slug])->first();
        }
        $data = [
            'title' => 'IntiFilm | ' . $detailMovie['title'],
            'addActive' => 'home',
            'detailMovie' => $detailMovie
        ];
        return view('movie/detail', $data);
    }
    public function edit($id)
    {
        $detailMovie = $this->movieModel->casts()->find($id);
        if (!isset($detailMovie)) {
            $detailMovie = $this->movieModel->find($id);
        }
        $data = [
            'title' => 'Ubah Data Film',
            'addActive' => 'home',
            'detailMovie' => $detailMovie
        ];
        return view('movie/edit', $data);
    }
    public function update($id)
    {
        $oldMovie  = $this->movieModel->find($id);
        // return var_dump(intval($this->request->getVar('hour_duration')));
        if ($oldMovie['slug'] == strtolower(url_title($this->request->getVar('title'), '-'))) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[movies.title]';
        }
        if (!$this->validate([
            'title' => [
                'rules' => $rule_title,
                'errors' => [
                    'required' => 'judul film harus diisi',
                    'is_unique' => 'judul film sudah terdaftar'
                ]
            ],
            'hour_duration' => 'required',
            'minutes_duration' => 'required',
            'release' => 'required',
            'trailer' => 'required',
        ])) {
            $validation = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        // return $this->request->getVar('minutes_duration');
        $this->movieModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => strtolower(url_title($this->request->getVar('title'), '-')),
            'hour_duration' => $this->request->getVar('hour_duration'),
            'minutes_duration' => $this->request->getVar('minutes_duration'),
            'description' => $this->request->getVar('description'),
            'release' => $this->request->getVar('release'),
            'trailer' => $this->request->getVar('trailer'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/');
    }
}
