<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function login()
    {
        return view('login', ['title' => 'Login Admin']);
    }

    public function prosesLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();
        $user = $db->table('user')
                   ->where('username', $username)
                   ->get()
                   ->getRow();

        if ($user && $password == $user->userpassword) {
            session()->set([
                'login' => true,
                'username' => $user->username
            ]);

            return redirect()->to('/admin');
        }

        return redirect()->to('/login')->with('error', 'Login gagal');
    }

    public function dashboard()
    {
        if (!session()->get('login')) {
            return redirect()->to('/login');
        }

        $db = \Config\Database::connect();
        $artikel = $db->table('artikel')
                      ->orderBy('created_at', 'DESC')
                      ->get()
                      ->getResult();

        return view('admin', [
            'title' => 'Dashboard Admin',
            'artikel' => $artikel
        ]);
    }

    public function tambah()
{
    if (!session()->get('login')) {
        return redirect()->to('/login');
    }

    $db = \Config\Database::connect();

    $kategori = $db->table('kategori')
                   ->get()
                   ->getResult();

    return view('tambah', [
        'title' => 'Tambah Artikel',
        'kategori' => $kategori
    ]);
}

   public function simpan()
{
    if (!session()->get('login')) {
        return redirect()->to('/login');
    }

    $db = \Config\Database::connect();

    $file = $this->request->getFile('gambar');
    $namaGambar = null;

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $namaGambar = $file->getRandomName();

        $file->move(ROOTPATH . 'public/uploads/', $namaGambar);
    }

    $data = [
    'judul' => $this->request->getPost('judul'),
    'isi'   => $this->request->getPost('isi'),
    'link'  => $this->request->getPost('link'),
    'status'=> $this->request->getPost('status'),
    'kategori_id' => $this->request->getPost('kategori_id'),
    'slug'  => url_title($this->request->getPost('judul'), '-', true),
    'created_at' => date('Y-m-d H:i:s')
];

    $db->table('artikel')->insert($data);

    return redirect()->to('/admin');
}
    public function editArtikel($id)
    {
        if (!session()->get('login')) {
            return redirect()->to('/login');
        }

        $db = \Config\Database::connect();

        $artikel = $db->table('artikel')
                      ->where('id', $id)
                      ->get()
                      ->getRow();

        return view('edit_artikel', [
            'title' => 'Edit Artikel',
            'artikel' => $artikel
        ]);
    }

    public function updateArtikel()
{
    if (!session()->get('login')) {
        return redirect()->to('/login');
    }

    $db = \Config\Database::connect();

    $file = $this->request->getFile('gambar');
    $data = [
        'judul' => $this->request->getPost('judul'),
        'isi'   => $this->request->getPost('isi'),
        'link'  => $this->request->getPost('link'),
        'status'=> $this->request->getPost('status'),
        'slug'  => url_title($this->request->getPost('judul'), '-', true)
    ];

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $namaGambar = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads/', $namaGambar);
        $data['gambar'] = $namaGambar;
    }

    $db->table('artikel')
       ->where('id', $this->request->getPost('id'))
       ->update($data);

    return redirect()->to('/admin');
}
    public function hapus($id)
    {
        if (!session()->get('login')) {
            return redirect()->to('/login');
        }

        $db = \Config\Database::connect();
        $db->table('artikel')->where('id', $id)->delete();

        return redirect()->to('/admin');
    }
    public function pesan()
    {
        if (!session()->get('login')) {
             return redirect()->to('/login');
        }
        
        $db = \Config\Database::connect();
        
        $pesan = $db->table('pesan')
                ->orderBy('created_at', 'DESC')
                ->get()
                ->getResult();
                
        return view('pesan', [
            'title' => 'Pesan Masuk',
            'pesan' => $pesan
    ]);
}
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}