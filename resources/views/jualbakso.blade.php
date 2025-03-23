<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu Bakso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Daftar Menu Bakso</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Bakso</th>
            <th>Harga</th>
        </tr>
        @foreach ($data as $bakso)
        <tr>
            <td>{{ $bakso['id'] }}</td>
            <td>{{ $bakso['nama'] }}</td>
            <td>Rp {{ number_format($bakso['harga'], 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>