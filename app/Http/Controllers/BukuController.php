<?php
namespace App\Http\Controllers;

class BukuController extends Controller
{
    private $daftarBuku = [
        [
            'id' => 1,
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'kategori' => 'Novel',
            'tahun' => 2005,
            'deskripsi' => 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan dan cita-cita.'
        ],
        [
            'id' => 2,
            'judul' => 'Bumi',
            'penulis' => 'Tere Liye',
            'kategori' => 'Fantasi',
            'tahun' => 2014,
            'deskripsi' => 'Petualangan seru seorang remaja dalam dunia paralel.'
        ],
        [
            'id' => 3,
            'judul' => 'Negeri 5 Menara',
            'penulis' => 'Ahmad Fuadi',
            'kategori' => 'Inspirasi',
            'tahun' => 2009,
            'deskripsi' => 'Perjalanan enam santri dalam mengejar impian mereka.'
        ],
        [
            'id' => 4,
            'judul' => 'Bulan',
            'penulis' => 'Tere Liye',
            'kategori' => 'Fantasi',
            'tahun' => 2015,
            'deskripsi' => 'Petualangan lanjutan di dunia paralel.'
        ],
        [
            'id' => 5,
            'judul' => 'Dilan 1990',
            'penulis' => 'Pidi Baiq',
            'kategori' => 'Romantis',
            'tahun' => 2014,
            'deskripsi' => 'Cerita cinta remaja dengan latar Kota Bandung.'
        ],
        [
            'id' => 6,
            'judul' => 'Atomic Habits',
            'penulis' => 'James Clear',
            'kategori' => 'Pengembangan Diri',
            'tahun' => 2018,
            'deskripsi' => 'Panduan membangun kebiasaan baik melalui perubahan kecil.'
        ],
    ];

    public function index()
    {
        return view('buku.index', [
            'buku' => $this->daftarBuku
        ]);
    }

    public function kategori()
    {
        $kategori = array_unique(
            array_column($this->daftarBuku, 'kategori')
        );

        return view('buku.kategori', [
            'kategori' => $kategori
        ]);
    }

    public function show($id)
    {
        foreach ($this->daftarBuku as $item) {
            if ($item['id'] == $id) {
                return view('buku.show', [
                    'item' => $item
                ]);
            }
        }

        abort(404);
    }
}