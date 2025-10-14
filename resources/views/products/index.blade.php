<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Novel</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(to right, #1a237e, #4a148c); 
            color: white; 
            text-align: center; 
            margin: 0; 
            padding: 20px; 
        }
        h2 {
            margin-bottom: 15px;
        }
        .top-buttons {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 8px;
            width: 40%;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        button, a.btn {
            padding: 8px 12px;
            margin-left: 5px;
            border-radius: 5px;
            border: none;
            background: #4a148c;
            color: white;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s;
        }
        button:hover, a.btn:hover {
            background: #6a1b9a;
        }
        table {
            width: 85%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            color: black;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background: #4a148c;
            color: white;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        tr:hover {
            background: #e1bee7;
        }
    </style>
</head>
<body>
    <h2>📚 {{ $message }}</h2>

    <div class="top-buttons">
        <a href="{{ url('/') }}" class="btn">🏠 Kembali ke Home</a>
    </div>

    <form method="GET" action="{{ route('products.index') }}">
        <input type="text" name="search" placeholder="Cari judul, penulis, atau genre..." value="{{ $keyword }}">
        <button type="submit">Cari</button>
        @if($keyword)
            <a href="{{ route('products.index') }}" class="btn">Reset</a>
        @endif
    </form>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Genre</th>
                <th>Tahun</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->judul }}</td>
                <td>{{ $product->penulis }}</td>
                <td>{{ $product->penerbit }}</td>
                <td>{{ $product->genre }}</td>
                <td>{{ $product->tahun }}</td>
                <td>{{ $product->stok }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7">Tidak ada novel ditemukan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
