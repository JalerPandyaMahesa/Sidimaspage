<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Bentuk Pendidikan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        a {
            text-decoration: none;
            color: #0000FF;
        }
        a:hover {
            text-decoration: underline;
            color: #FF0000;
        }
    </style>
</head>
<body>
    <h1>Pilih Bentuk Pendidikan</h1>
    <table>
        <thead>
            <tr>
                <th>Bentuk Pendidikan</th>
                <th>Jumlah Sekolah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bentukPendidikan as $bp)
            <tr>
                <td>
                    <a href="{{ route('sekolah.pilih.kecamatan', ['bentuk_pendidikan' => $bp->bentuk_pendidikan]) }}">
                        {{ $bp->bentuk_pendidikan }}
                    </a>
                </td>
                <td>{{ $bp->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
