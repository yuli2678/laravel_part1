<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <style>
        body { font-family: Arial; background: linear-gradient(to right,#1a237e,#4a148c); color:white; text-align:center; }
        table { width:80%; margin:20px auto; border-collapse:collapse; background:white; color:black; }
        th,td { padding:10px; border:1px solid #ccc; }
        th { background:#4a148c; color:white; }
        input, button { padding:6px 10px; margin-top:10px; border-radius:5px; border:none; }
        button { background:#4a148c; color:white; cursor:pointer; }
        button:hover { background:#6a1b9a; }
    </style>
</head>
<body>
    <h1>{{ $message }}</h1>
    <form method="GET" action="{{ route('books.index') }}">
        <input type="text" name="search" value="{{ $keyword }}" placeholder="Cari judul atau penulis...">
        <button type="submit">Cari</button>
    </form>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
        </tr>
        @forelse($books as $index => $book)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->kategori }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>{{ $book->stok }}</td>
        </tr>
        @empty
        <tr><td colspan="6">Data tidak ditemukan</td></tr>
        @endforelse
    </table>
</body>
</html>
