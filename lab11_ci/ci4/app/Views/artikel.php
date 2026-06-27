public function admin_index()
{
    $title = 'Daftar Artikel (Admin)';

    $model = new ArtikelModel();

    $q = $this->request->getVar('q') ?? '';
    $kategori_id = $this->request->getVar('kategori_id') ?? '';
    $page = $this->request->getVar('page') ?? 1;

    $builder = $model->table('artikel')
        ->select('artikel.*, kategori.nama_kategori')
        ->join('kategori', 'kategori.id_kategori = artikel.id_kategori');

    // Pencarian Judul
    if ($q != '') {
        $builder->like('artikel.judul', $q);
    }

    // Filter Kategori
    if ($kategori_id != '') {
        $builder->where('artikel.id_kategori', $kategori_id);
    }

    // Pagination
    $artikel = $builder->paginate(10, 'default', $page);
    $pager = $model->pager;

    $data = [
        'title' => $title,
        'q' => $q,
        'kategori_id' => $kategori_id,
        'artikel' => $artikel,
        'pager' => $pager
    ];

    // Jika request AJAX
    if ($this->request->isAJAX()) {
        return $this->response->setJSON([
            'artikel' => $artikel,
            'pager' => $pager->links()
        ]);
    }

    // Ambil data kategori
    $kategoriModel = new KategoriModel();
    $data['kategori'] = $kategoriModel->findAll();

    return view('artikel/admin_index', $data);
}