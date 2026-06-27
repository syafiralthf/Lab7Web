<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $artikel = $db->table('artikel')
                      ->where('status', 1)
                      ->orderBy('created_at', 'DESC')
                      ->get()
                      ->getResult();

        $home = $db->table('halaman')
                   ->where('nama', 'home')
                   ->get()
                   ->getRow();

        return view('home', [
            'title'   => 'Home',
            'artikel' => $artikel,
            'content' => $home->isi ?? ''
        ]);
    }

    public function artikel()
{
    $db = \Config\Database::connect();

    $q = $this->request->getGet('q');
    $kategori = $this->request->getGet('kategori');

    $kategoriData = $db->table('kategori')->get()->getResult();

    $builder = $db->table('artikel')
                  ->select('artikel.*, kategori.nama_kategori')
                  ->join('kategori', 'kategori.id = artikel.kategori_id')
                  ->where('status', 1);

    if($q){
        $builder->like('judul', $q);
    }

    if($kategori){
        $builder->where('kategori.id', $kategori);
    }

    $artikel = $builder
                ->orderBy('created_at', 'DESC')
                ->get()
                ->getResult();

    return view('artikel', [
        'title'     => 'Halaman Artikel',
        'artikel'   => $artikel,
        'q'         => $q,
        'kategori'  => $kategori,
        'kategoriData' => $kategoriData
    ]);
}

    public function detail($slug)
    {
        $db = \Config\Database::connect();

        $artikel = $db->table('artikel')
                      ->where('slug', $slug)
                      ->where('status', 1)
                      ->get()
                      ->getRow();

        if (!$artikel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('detail', [
            'title'   => $artikel->judul,
            'artikel' => $artikel
        ]);
    }

    public function about()
    {
        $db = \Config\Database::connect();

        $about = $db->table('halaman')
                    ->where('nama', 'about')
                    ->get()
                    ->getRow();

        return view('about', [
            'title'   => 'About',
            'content' => $about->isi ?? ''
        ]);
    }

    public function contact()
    {
        $db = \Config\Database::connect();

        $contact = $db->table('halaman')
                      ->where('nama', 'contact')
                      ->get()
                      ->getRow();

        return view('contact', [
            'title'   => 'Kontak',
            'content' => $contact->isi ?? ''
        ]);
    }

    public function kirimPesan()
    {
        $db = \Config\Database::connect();

        $data = [
            'nama'    => $this->request->getPost('nama'),
            'email'   => $this->request->getPost('email'),
            'pesan'   => $this->request->getPost('pesan'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $db->table('pesan')->insert($data);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}