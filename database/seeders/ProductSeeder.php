<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $novels = [
            ['judul' => 'Pride and Prejudice', 'penulis' => 'Jane Austen', 'penerbit' => 'T. Egerton', 'genre' => 'Romance', 'tahun' => 1813, 'stok' => 21],
            ['judul' => 'Me Before You', 'penulis' => 'Jojo Moyes', 'penerbit' => 'Penguin Books', 'genre' => 'Drama', 'tahun' => 2012, 'stok' => 29],
            ['judul' => 'The Fault in Our Stars', 'penulis' => 'John Green', 'penerbit' => 'Dutton Books', 'genre' => 'Romance', 'tahun' => 2012, 'stok' => 19],
            ['judul' => 'Outlander', 'penulis' => 'Diana Gabaldon', 'penerbit' => 'Delacorte Press', 'genre' => 'Historical Fiction', 'tahun' => 1991, 'stok' => 8],
            ['judul' => 'It Ends With Us', 'penulis' => 'Colleen Hoover', 'penerbit' => 'Atria Books', 'genre' => 'Romance', 'tahun' => 2016, 'stok' => 11],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'genre' => 'Sejarah', 'tahun' => 1980, 'stok' => 26],
            ['judul' => 'Anak Semua Bangsa', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'genre' => 'Sejarah', 'tahun' => 1981, 'stok' => 16],
            ['judul' => 'Jejak Langkah', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'genre' => 'Sejarah', 'tahun' => 1985, 'stok' => 15],
            ['judul' => 'Rumah Kaca', 'penulis' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'genre' => 'Sejarah', 'tahun' => 1988, 'stok' => 14],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'penerbit' => 'Gramedia Pustaka Utama', 'genre' => 'Inspiratif', 'tahun' => 2009, 'stok' => 28],
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'genre' => 'Inspiratif', 'tahun' => 2005, 'stok' => 6],
            ['judul' => 'Sang Pemimpi', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'genre' => 'Inspiratif', 'tahun' => 2006, 'stok' => 21],
            ['judul' => 'Edensor', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'genre' => 'Inspiratif', 'tahun' => 2007, 'stok' => 22],
            ['judul' => 'Ayah', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'genre' => 'Drama', 'tahun' => 2015, 'stok' => 12],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'penerbit' => 'Bentang Pustaka', 'genre' => 'Romance', 'tahun' => 2009, 'stok' => 9],
            ['judul' => 'Filosofi Kopi', 'penulis' => 'Dee Lestari', 'penerbit' => 'Bentang Pustaka', 'genre' => 'Fiksi', 'tahun' => 2006, 'stok' => 7],
            ['judul' => 'Supernova: Ksatria, Putri, dan Bintang Jatuh', 'penulis' => 'Dee Lestari', 'penerbit' => 'Truedee Books', 'genre' => 'Fiksi Ilmiah', 'tahun' => 2001, 'stok' => 18],
            ['judul' => 'Dilan: Dia adalah Dilanku Tahun 1990', 'penulis' => 'Pidi Baiq', 'penerbit' => 'Pastel Books', 'genre' => 'Romance', 'tahun' => 2014, 'stok' => 14],
            ['judul' => 'Milea: Suara dari Dilan', 'penulis' => 'Pidi Baiq', 'penerbit' => 'Pastel Books', 'genre' => 'Romance', 'tahun' => 2016, 'stok' => 17],
            ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'penerbit' => 'Gramedia Pustaka Utama', 'genre' => 'Fiksi Ilmiah', 'tahun' => 2016, 'stok' => 8],
        ];

        foreach ($novels as $novel) {
            Product::create($novel);
        }
    }
}
