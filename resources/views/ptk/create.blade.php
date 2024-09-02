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
    <form action="{{ isset($ptk) ? route('ptk.update', $ptk->ptk_id) : route('ptk.store') }}" method="POST">
        @csrf
        @if(isset($ptk))
            @method('PUT')
        @endif

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ isset($ptk) ? $ptk->nama : '' }}" required><br>

        <input type="hidden" name="sekolah_id" value="{{ $sekolah_id }}">

        <button type="submit">{{ isset($ptk) ? 'Update' : 'Create' }}</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sekolah_id').select2({
                placeholder: 'Select a school',
                allowClear: true
            });
        });
    </script>
</body>
</html>
