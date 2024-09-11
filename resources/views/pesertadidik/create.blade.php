<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Peserta Didik</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <h1>Create Peserta Didik</h1>

    <form action="{{ route('pesertadidik.import', $sekolah_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Import Peserta Didik:</label>
            <input type="file" name="file" required>
        </div>
        <button type="submit">Upload</button>
    </form>

    <form
        action="{{ isset($pesertadidik) ? route('pesertadidik.update', $pesertadidik->peserta_didik_id) : route('pesertadidik.store') }}"
        method="POST">
        @csrf
        @if(isset($pesertadidik))
            @method('PUT')
        @endif

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ isset($pesertadidik) ? $pesertadidik->nama : '' }}"
            required><br>

        <input type="hidden" name="sekolah_id" value="{{ $sekolah_id }}">

        <button type="submit">{{ isset($pesertadidik) ? 'Update' : 'Create' }}</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sekolah_id').select2({
                placeholder: 'Select a school',
                allowClear: true
            });
        });
    </script>
</body>

</html>