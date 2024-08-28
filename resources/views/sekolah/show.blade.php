<!DOCTYPE html>
<html>
<head>
    <title>Show sekolah {{$sekolah->name}}</title>
</head>
<body>
    <h1>Show sekolah</h1>
    
    <p><strong>Sekolah ID:</strong> {{ $sekolah->sekolah_id }}</p>
    <p><strong>Nama:</strong> {{ $sekolah->nama }}</p>
    <p><strong>Provinsi:</strong> {{ $sekolah->provinsi }}</p>
    <p><strong>Akreditasi:</strong> {{ $sekolah->akreditasi }}</p>
    <p><strong>Alamat Jalan:</strong> {{ $sekolah->alamat_jalan }}</p>
    <p><strong>RT:</strong> {{ $sekolah->rt }}</p>
    <p><strong>RW:</strong> {{ $sekolah->rw }}</p>
    <p><strong>NSS:</strong> {{ $sekolah->nss }}</p>
    <p><strong>Nama Dusun:</strong> {{ $sekolah->nama_dusun }}</p>
    <p><strong>Kode Wilayah:</strong> {{ $sekolah->kode_wilayah }}</p>
    <p><strong>Kode Desa Kelurahan:</strong> {{ $sekolah->kode_desa_kelurahan}}</p>
    <p><strong>Desa Kelurahan:</strong> {{ $sekolah->desa_kelurahan }}</p>
    <p><strong>Kode Kecamatan:</strong> {{ $sekolah->kode_kecamatan }}</p>
    <p><strong>Kode Kabupaten:</strong> {{ $sekolah->kode_kabupaten }}</p>
    <p><strong>Kode Provinsi:</strong> {{ $sekolah->kode_provinsi }}</p>
    <p><strong>Kode Pos:</strong> {{ $sekolah->kode_pos }}</p>
    <p><strong>Lintang:</strong> {{ $sekolah->lintang }}</p>
    <p><strong>Bujur:</strong> {{ $sekolah->bujur }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $sekolah->nomor_telepon }}</p>
    <p><strong>Nomor Fax:</strong> {{ $sekolah->nomor_fax }}</p>
    <p><strong>Email:</strong> {{ $sekolah->email }}</p>
    <p><strong>Website:</strong> {{ $sekolah->website }}</p>
    <p><strong>Kebutuhan Khusus:</strong> {{ $sekolah->kebutuhan_khusus }}</p>
    <p><strong>SK Pendirian Sekolah:</strong> {{ $sekolah->sk_pendirian_sekolah }}</p>
    <p><strong>Tanggal SK Pendirian:</strong> {{ $sekolah->tanggal_sk_pendirian }}</p>
    <p><strong>Status Kepemilikan:</strong> {{ $sekolah->status_kepemilikan }}</p>
    <p><strong>Yayasan:</strong> {{ $sekolah->yayasan }}</p>
    <p><strong>SK Izin Operasional:</strong> {{$sekolah->sk_izin_operasional}}</p>
    <p><strong>Tanggal SK Izin Operasional:</strong> {{$sekolah->tanggal_sk_izin_operasional}}</p>
    <p><strong>No Rekening:</strong> {{$sekolah->no_rekening}}</p>
    <p><strong>Nama Bank:</strong> {{$sekolah->nama_bank}}</p>
    <p><strong>Cabang KCP Unit:</strong> {{$sekolah->cabang_kcp_unit}}</p>
    <p><strong>Rekening Atas Nama:</strong> {{$sekolah->rekening_atas_nama}}</p>
    <p><strong>MBs:</strong> {{ $sekolah->mbs }}</p>
    <p><strong>NPWP:</strong> {{ $sekolah->npwp }}</p>
    <p><strong>NM WP:</strong> {{ $sekolah->nm_wp }}</p>
    <p><strong>Keaktifan:</strong> {{ $sekolah->keaktifan }}</p>
    <p><strong>Flag:</strong> {{ $sekolah->flag }}</p>
    <p><strong>Wilayah Terpencil:</strong> {{ $sekolah->wilayah_terpencil }}</p>
    <p><strong>Wilayah Perbatasan:</strong> {{ $sekolah->wilayah_perbatasan }}</p>
    <p><strong>Wilayah Transmigrasi:</strong> {{ $sekolah->wilayah_transmigrasi }}</p>
    <p><strong>Wilayah Adat Terpencil:</strong> {{ $sekolah->wilayah_adat_terpencil }}</p>
    <p><strong>Wilayah Bencana Alam:</strong> {{ $sekolah->wilayah_bencana_alam }}</p>
    <p><strong>Wilayah Bencana Sosial:</strong> {{ $sekolah->wilayah_bencana_sosial }}</p>
    <p><strong>Partisipasi BOS:</strong> {{ $sekolah->partisipasi_bos }}</p>
    <p><strong>Waktu Penyelenggaraan:</strong> {{ $sekolah->waktu_penyelenggaraan }}</p>
    <p><strong>Sumber Listrik:</strong> {{ $sekolah->sumber_listrik }}</p>
    <p><strong>Sertifikasi Iso:</strong> {{ $sekolah->sertifikasi_iso }}</p>
    <p><strong>Akses Internet:</strong> {{ $sekolah->akses_internet }}</p>
    <p><strong>Akses Internet2:</strong> {{ $sekolah->akses_internet_2 }}</p>
    <p><strong>Luas Tanah Milik:</strong> {{ $sekolah->luas_tanah_milik }}</p>
    <p><strong>Luas Tanah Bukan Milik:</strong> {{ $sekolah->luas_tanah_bukan_milik }}</p>
    <p><strong>Kode Registrasi:</strong> {{ $sekolah->kode_registrasi }}</p>
    <p><strong>Daya Listrik:</strong> {{ $sekolah->daya_listrik }}</p>
    <p><strong>Kontinuitas Listrik:</strong> {{ $sekolah->kontinuitas_listrik }}</p>
    <p><strong>Jarak Listrik:</strong> {{ $sekolah->jarak_listrik }}</p>
    

    <a href="{{ route('sekolah.index') }}">Back to List</a>
</body>
</html>
