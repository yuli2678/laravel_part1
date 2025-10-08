<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Novel</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #2c3e50, #4a148c);
        color: #fff;
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .search-container {
        text-align: center;
        margin-bottom: 30px;
    }
    .search-container input[type="text"] {
        padding: 10px;
        width: 250px;
        border-radius: 5px;
        border: none;
        outline: none;
    }
    .search-container button {
        padding: 10px 20px;
        background: #6a1b9a;
        border: none;
        border-radius: 5px;
        color: #fff;
        margin-left: 5px;
        cursor: pointer;
    }
    .search-container button:hover {
        background: #4a148c;
    }

    /* 🌟 Tabel Rapi */
    table {
        width: 90%;
        margin: 0 auto;
        border-collapse: collapse;
        background: rgba(255,255,255,0.95);
        color: #333;
        border-radius: 8px;
        overflow: hidden;
        table-layout: fixed; /* kolom proporsional */
    }

    th, td {
        padding: 12px 15px;
        border-bottom: 1px solid #ddd;
        vertical-align: middle;
    }

    th {
        background: #4a148c;
        color: #fff;
        text-align: center;
        font-weight: bold;
    }

    th:nth-child(1), td:nth-child(1) { width: 7%; text-align: center; }
    th:nth-child(2), td:nth-child(2) { width: 30%; text-align: left; }
    th:nth-child(3), td:nth-child(3) { width: 25%; text-align: left; }
    th:nth-child(4), td:nth-child(4) { width: 23%; text-align: left; }
    th:nth-child(5), td:nth-child(5) { width: 15%; text-align: center; }

    tr:hover {
        background: #f3e5f5;
    }
</style>

</head>
<body>
    <h1>Daftar Novel</h1>
@if(isset($message))
    <p style="text-align:center; font-size:18px; margin-bottom:20px;">{{ $message }}</p>
@endif

    <!-- Search Bar -->
    <div class="search-container">
        <form method="GET" action="{{ route('home') }}">
            <input type="text" name="search" placeholder="Cari judul atau pengarang..." value="{{ $keyword }}">
            <button type="submit">Cari</button>
        </form>
    </div>

    <!-- Table Novel -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($novels as $index => $novel)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $novel['judul'] }}</td>
                <td>{{ $novel['pengarang'] }}</td>
                <td>{{ $novel['penerbit'] }}</td>
                <td>{{ $novel['tahun'] }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Data tidak ditemukan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
