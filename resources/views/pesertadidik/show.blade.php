<!DOCTYPE html>
<html>
<head>
    <title>Show Peserta Didik {{$pesertadidik->name}}</title>
</head>
<body>
    <h1>Show Peserta Didik</h1>
    
    <p><strong>Peserta Didik ID:</strong> {{ $pesertadidik->peserta_didik_id }}</p>
    <p><strong>Nama:</strong> {{ $pesertadidik->nama }}</p>
    <p><strong>Sekolah:</strong> {{ $pesertadidik->sekolah->nama ?? 'N/A' }}</p>
    
    

    <a href="{{ route('pesertadidik.index') }}">Back to List</a>
</body>
</html>
