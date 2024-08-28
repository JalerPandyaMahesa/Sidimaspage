<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sekolah</title>
</head>
<body>
    <h1>Edit Sekolah</h1>
    <form action="{{ route('sekolah.edit', ['sekolah_id' => $sekolah->sekolah_id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $sekolah->nama }}" required><br>
        
        <label for="kabupaten">Kabupaten:</label>
        <input type="text" id="kabupaten" name="kabupaten" value="{{ $sekolah->kabupaten }}" required><br>
        
        <label for="kecamatan">Kecamatan:</label>
        <input type="text" id="kecamatan" name="kecamatan" value="{{ $sekolah->kecamatan }}" required><br>
        
        <label for="bentuk_pendidikan">Bentuk Pendidikan:</label>
        <input type="text" id="bentuk_pendidikan" name="bentuk_pendidikan" value="{{ $sekolah->bentuk_pendidikan }}" required><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
