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
        // return var_dump(isset($detailMovie['all_casts']));
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
