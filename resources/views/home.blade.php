<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Novel</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e9e4f0, #d3cce3);
            color: #333;
            padding-bottom: 60px;
        }

        /* Navbar */
        nav {
            background: linear-gradient(to right, #5c258d, #4389a2);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        nav h1 {
            font-size: 26px;
            font-weight: 600;
        }

        /* Container */
        .container {
            max-width: 950px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            font-size: 28px;
            background: linear-gradient(to right, #5c258d, #4389a2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 25px;
            font-weight: 600;
        }

        /* Search box */
        .search-box {
            text-align: right;
            margin-bottom: 20px;
        }
        .search-box input {
            padding: 10px 14px;
            width: 280px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }
        .search-box input:focus {
            border-color: #5c258d;
            box-shadow: 0 0 8px rgba(92,37,141,0.3);
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        thead {
            background: linear-gradient(to right, #5c258d, #4389a2);
            color: white;
        }
        th, td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tbody tr:hover {
            background: rgba(92,37,141,0.05);
        }

        /* Footer */
        footer {
            background: linear-gradient(to right, #5c258d, #4389a2);
            color: white;
            text-align: center;
            padding: 12px;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
        }

        @media (max-width: 600px) {
            .search-box input { width: 100%; }
            h2 { font-size: 22px; }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <h1>📚 Data Novel</h1>
    </nav>

    <!-- Container -->
    <div class="container">
        <h2>Daftar Novel</h2>

        <!-- Search -->
        <div class="search-box">
            <input type="text" id="search" placeholder="Cari judul atau pengarang...">
        </div>

        <!-- Table -->
        <table id="novelTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Novel</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Laskar Pelangi</td>
                    <td>Andrea Hirata</td>
                    <td>Bentang Pustaka</td>
                    <td>2005</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Perahu Kertas</td>
                    <td>Dee Lestari</td>
                    <td>Bentang Pustaka</td>
                    <td>2009</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dilan 1990</td>
                    <td>Pidi Baiq</td>
                    <td>Pastel Books</td>
                    <td>2014</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ayat-Ayat Cinta</td>
                    <td>Habiburrahman El Shirazy</td>
                    <td>Republika</td>
                    <td>2004</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Bumi</td>
                    <td>Tere Liye</td>
                    <td>Gramedia</td>
                    <td>2014</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2025 Data Novel | Dibuat oleh yuli
    </footer>

    <!-- Script Search -->
    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#novelTable tbody tr');

            rows.forEach(row => {
                const cellsText = row.innerText.toLowerCase();
                row.style.display = cellsText.includes(filter) ? '' : 'none';
            });
        });
    </script>

</body>
</html>
