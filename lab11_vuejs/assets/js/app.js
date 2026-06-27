const { createApp } = Vue

// Sesuaikan lokasi URL REST API backend CodeIgniter 4 kamu
const apiUrl = 'http://localhost/labci4/public'

createApp({
    data() {
        return {
            artikel: [], // Tempat menampung array data artikel dari API
            formData: {
                id: null,
                judul: '',
                isi: '',
                status: 0
            },
            showForm: false, // Status visibility modal form pop-up
            formTitle: 'Tambah Data',
            statusOptions: [
                { text: 'Draft', value: 0 },
                { text: 'Publish', value: 1 }
            ]
        }
    },
    mounted() {
        // Otomatis mengambil data ketika aplikasi web pertama kali dimuat
        this.loadData()
    },
    methods: {
        // Mengambil data (Read) dari REST API
        loadData() {
            axios.get(apiUrl + '/post')
                .then(response => {
                    this.artikel = response.data.artikel
                })
                .catch(error => console.log(error))
        },
        // Mengondisikan form untuk siap menambah data baru (Create)
        tambah() {
            this.showForm = true
            this.formTitle = 'Tambah Data'
            this.formData = {
                id: null,
                judul: '',
                isi: '',
                status: 0
            }
        },
        // Memasukkan data baris terpilih ke dalam kolom form input (Update)
        edit(data) {
            this.showForm = true
            this.formTitle = 'Ubah Data'
            this.formData = {
                id: data.id,
                judul: data.judul,
                isi: data.isi,
                status: data.status
            }
        },
        // Menghapus data (Delete) berdasarkan parameter ID database
        hapus(index, id) {
            if (confirm('Yakin menghapus data?')) {
                axios.delete(apiUrl + '/post/' + id)
                    .then(response => {
                        // Menghapus item dari baris tabel UI secara real-time tanpa reload halaman
                        this.artikel.splice(index, 1)
                    })
                    .catch(error => console.log(error))
            }
        },
        // Logika eksekusi submit tombol simpan form
        saveData() {
            if (this.formData.id) {
                // Jalankan aksi PUT jika objek data sudah memiliki ID (Update)
                axios.put(apiUrl + '/post/' + this.formData.id, this.formData)
                    .then(response => {
                        this.loadData()
                        this.showForm = false
                    })
                    .catch(error => console.log(error))
            } else {
                // Jalankan aksi POST jika objek data belum memiliki ID (Create)
                axios.post(apiUrl + '/post', this.formData)
                    .then(response => {
                        this.loadData()
                        this.showForm = false
                    })
                    .catch(error => console.log(error))
            }

            // Mengembalikan isian form data ke kondisi kosong semula
            this.formData = {
                id: null,
                judul: '',
                isi: '',
                status: 0
            }
        },
        // Mengubah kode angka status menjadi string teks deskriptif
        statusText(status) {
            return status == 1 ? 'Publish' : 'Draft'
        }
    }
}).mount('#app')