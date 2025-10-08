<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index(Request $request)
    {
        $novels = [
            ['judul' => 'Pride and Prejudice', 'pengarang' => 'Jane Austen', 'penerbit' => 'T. Egerton', 'tahun' => 1813],
            ['judul' => 'Me Before You', 'pengarang' => 'Jojo Moyes', 'penerbit' => 'Penguin Books', 'tahun' => 2012],
            ['judul' => 'The Fault in Our Stars', 'pengarang' => 'John Green', 'penerbit' => 'Dutton Books', 'tahun' => 2012],
            ['judul' => 'Outlander', 'pengarang' => 'Diana Gabaldon', 'penerbit' => 'Delacorte Press', 'tahun' => 1991],
            ['judul' => 'It Ends With Us', 'pengarang' => 'Colleen Hoover', 'penerbit' => 'Atria Books', 'tahun' => 2016],
            ['judul' => 'Bumi Manusia', 'pengarang' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'tahun' => 1980],
            ['judul' => 'Anak Semua Bangsa', 'pengarang' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'tahun' => 1981],
            ['judul' => 'Jejak Langkah', 'pengarang' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'tahun' => 1985],
            ['judul' => 'Rumah Kaca', 'pengarang' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'tahun' => 1988],
            ['judul' => 'Negeri 5 Menara', 'pengarang' => 'Ahmad Fuadi', 'penerbit' => 'Gramedia Pustaka Utama', 'tahun' => 2009],
            ['judul' => 'Laskar Pelangi', 'pengarang' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'tahun' => 2005],
            ['judul' => 'Sang Pemimpi', 'pengarang' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'tahun' => 2006],
            ['judul' => 'Edensor', 'pengarang' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'tahun' => 2007],
            ['judul' => 'Ayah', 'pengarang' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'tahun' => 2015],
            ['judul' => 'Perahu Kertas', 'pengarang' => 'Dee Lestari', 'penerbit' => 'Bentang Pustaka', 'tahun' => 2009],
            ['judul' => 'Filosofi Kopi', 'pengarang' => 'Dee Lestari', 'penerbit' => 'Bentang Pustaka', 'tahun' => 2006],
            ['judul' => 'Supernova: Ksatria, Putri, dan Bintang Jatuh', 'pengarang' => 'Dee Lestari', 'penerbit' => 'Truedee Books', 'tahun' => 2001],
            ['judul' => 'Dilan: Dia adalah Dilanku Tahun 1990', 'pengarang' => 'Pidi Baiq', 'penerbit' => 'Pastel Books', 'tahun' => 2014],
            ['judul' => 'Milea: Suara dari Dilan', 'pengarang' => 'Pidi Baiq', 'penerbit' => 'Pastel Books', 'tahun' => 2016],
            ['judul' => 'Hujan', 'pengarang' => 'Tere Liye', 'penerbit' => 'Gramedia Pustaka Utama', 'tahun' => 2016],
        ];

        $keyword = $request->input('search');

        if ($keyword) {
            $novels = array_filter($novels, function ($novel) use ($keyword) {
                return stripos($novel['judul'], $keyword) !== false ||
                       stripos($novel['pengarang'], $keyword) !== false;
            });
        }

        return view('home', [
    'novels' => $novels,
    'keyword' => $keyword,
    'message' => 'Selamat datang di Koleksi Novel!'
]);

    }
}
