<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['judul' => 'Pride and Prejudice', 'penulis' => 'Jane Austen', 'kategori' => 'T. Egerton', 'tahun_terbit' => 1813, 'stok' => rand(5, 30)],
            ['judul' => 'Me Before You', 'penulis' => 'Jojo Moyes', 'kategori' => 'Penguin Books', 'tahun_terbit' => 2012, 'stok' => rand(5, 30)],
            ['judul' => 'The Fault in Our Stars', 'penulis' => 'John Green', 'kategori' => 'Dutton Books', 'tahun_terbit' => 2012, 'stok' => rand(5, 30)],
            ['judul' => 'Outlander', 'penulis' => 'Diana Gabaldon', 'kategori' => 'Delacorte Press', 'tahun_terbit' => 1991, 'stok' => rand(5, 30)],
            ['judul' => 'It Ends With Us', 'penulis' => 'Colleen Hoover', 'kategori' => 'Atria Books', 'tahun_terbit' => 2016, 'stok' => rand(5, 30)],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'kategori' => 'Lentera Dipantara', 'tahun_terbit' => 1980, 'stok' => rand(5, 30)],
            ['judul' => 'Anak Semua Bangsa', 'penulis' => 'Pramoedya Ananta Toer', 'kategori' => 'Lentera Dipantara', 'tahun_terbit' => 1981, 'stok' => rand(5, 30)],
            ['judul' => 'Jejak Langkah', 'penulis' => 'Pramoedya Ananta Toer', 'kategori' => 'Lentera Dipantara', 'tahun_terbit' => 1985, 'stok' => rand(5, 30)],
            ['judul' => 'Rumah Kaca', 'penulis' => 'Pramoedya Ananta Toer', 'kategori' => 'Lentera Dipantara', 'tahun_terbit' => 1988, 'stok' => rand(5, 30)],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'kategori' => 'Gramedia Pustaka Utama', 'tahun_terbit' => 2009, 'stok' => rand(5, 30)],
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'kategori' => 'Bentang Pustaka', 'tahun_terbit' => 2005, 'stok' => rand(5, 30)],
            ['judul' => 'Sang Pemimpi', 'penulis' => 'Andrea Hirata', 'kategori' => 'Bentang Pustaka', 'tahun_terbit' => 2006, 'stok' => rand(5, 30)],
            ['judul' => 'Edensor', 'penulis' => 'Andrea Hirata', 'kategori' => 'Bentang Pustaka', 'tahun_terbit' => 2007, 'stok' => rand(5, 30)],
            ['judul' => 'Ayah', 'penulis' => 'Andrea Hirata', 'kategori' => 'Bentang Pustaka', 'tahun_terbit' => 2015, 'stok' => rand(5, 30)],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'kategori' => 'Bentang Pustaka', 'tahun_terbit' => 2009, 'stok' => rand(5, 30)],
            ['judul' => 'Filosofi Kopi', 'penulis' => 'Dee Lestari', 'kategori' => 'Bentang Pustaka', 'tahun_terbit' => 2006, 'stok' => rand(5, 30)],
            ['judul' => 'Supernova: Ksatria, Putri, dan Bintang Jatuh', 'penulis' => 'Dee Lestari', 'kategori' => 'Truedee Books', 'tahun_terbit' => 2001, 'stok' => rand(5, 30)],
            ['judul' => 'Dilan: Dia adalah Dilanku Tahun 1990', 'penulis' => 'Pidi Baiq', 'kategori' => 'Pastel Books', 'tahun_terbit' => 2014, 'stok' => rand(5, 30)],
            ['judul' => 'Milea: Suara dari Dilan', 'penulis' => 'Pidi Baiq', 'kategori' => 'Pastel Books', 'tahun_terbit' => 2016, 'stok' => rand(5, 30)],
            ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'kategori' => 'Gramedia Pustaka Utama', 'tahun_terbit' => 2016, 'stok' => rand(5, 30)],
        ]);
    }
}
