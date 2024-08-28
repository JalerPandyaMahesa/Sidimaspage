<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta Didik</title>
</head>
<body>
    <h1>Edit Peserta Didik</h1>
    <form action="{{ route('pesertadidik.update', ['peserta_didik_id' => $pesertadidik->peserta_didik_id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $pesertadidik->nama }}" required><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
