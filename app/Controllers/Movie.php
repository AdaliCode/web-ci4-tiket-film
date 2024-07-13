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
    public function create()
    {
        $data = ['title' => 'Tambah Data Film', 'addActive' => 'home'];
        return view('movie/create', $data);
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
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[movies.title]',
                'errors' => [
                    'required' => '{field} film harus diisi',
                    'is_unique' => '{field} film sudah terdaftar'
                ]
            ],
            'cover' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        // // return var_dump($this->request->getVar('title'));
        // $slug = strtolower(url_title($this->request->getVar('title'), '-'));
        // return var_dump($slug);
        // $detailMovie = $this->movieModel->casts()->where(['slug' => $slug])->first();
        // if (!isset($detailMovie)) {
        //     $detailMovie = $this->movieModel->where(['slug' => $slug])->first();
        // }
        // if ($detailMovie['title'] == $this->request->getVar('title')) {
        //     $rule_title = 'required';
        // } else {
        //     $rule_title = 'required|is_unique[movies.title]';
        // }
        // if (!$this->validate([
        //     'title' => [
        //         'rules' => $rule_title,
        //         'errors' => [
        //             'required' => 'judul film harus diisi',
        //             'is_unique' => 'judul film sudah terdaftar'
        //         ]
        //     ], 'cover' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} film harus diisi',
        //         ]
        //     ]
        // ])) {
        //     return 'lll';
        //     $validation = \Config\Services::validation();
        //     return redirect()->back()->withInput()->with('validation', $validation);
        // }
        // return var_dump($detailMovie);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[movies.title]',
                'errors' => [
                    'required' => '{field} film harus diisi',
                    'is_unique' => '{field} film sudah terdaftar'
                ]
            ],
            'cover' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->movieModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'cover' => $this->request->getVar('cover'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('/'));
    }
}
