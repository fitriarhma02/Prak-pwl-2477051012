<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>

    <style>
        body {
            background-color: #1e3a8a; /* Biru */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: white;
            margin-top: 30px;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #2563eb; /* Biru lebih terang */
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table, th, td {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <h2>Halaman User Management</h2>

    <div class="container">
        <table>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th>Prodi</th>
            </tr>

            @foreach ($users as $user)
            <tr>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['jurusan'] }}</td>
                <td>{{ $user['prodi'] }}</td>
            </tr>
            @endforeach

        </table>
    </div>

</body>
</html>