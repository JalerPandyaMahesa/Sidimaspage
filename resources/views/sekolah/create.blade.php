<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Sekolah</title>
</head>
<body>
    <h1>Create Sekolah</h1>
    <form action="{{ route('sekolah.store') }}" method="POST">
        @csrf

        <label for="npsn">NPSN:</label>
        <input type="text" id="npsn" name="npsn" required><br>
       
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="bentuk_pendidikan">Bentuk Pendidikan:</label>
        <input type="text" id="bentuk_pendidikan" name="bentuk_pendidikan" required><br>

        <label for="status_sekolah">Status Sekolah:</label>
        <select id="status_sekolah" name="status_sekolah"><br>
            <option value="SWASTA">SWASTA</option>
            <option value="NEGERI">NEGERI</option>
            </select>
            <br>
        
        <label for="kabupaten">Kabupaten:</label>
        <input type="text" id="kabupaten" name="kabupaten" required><br>
        
        <label for="kecamatan">Kecamatan:</label>
        <input type="text" id="kecamatan" name="kecamatan" required><br>
        
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required><br>

        <label for="akreditasi">Akreditasi:</label>
        <input type="text" id="akreditasi" name="akreditasi" required><br>

        <label for="alamat_jalan">Alamat Jalan:</label>
        <input type="text" id="alamat_jalan" name="alamat_jalan"><br>

        <label for="rt">RT:</label>
        <input type="number" id="rt" name="rt" required><br>

        <label for="rw">RW:</label>
        <input type="number" id="rw" name="rw" required><br>

        <label for="nss">NSS:</label>
        <input type="text" id="nss" name="nss"><br>

        <label for="nama_dusun">Nama Dusun:</label>
        <input type="text" id="nama_dusun" nama="nama_dusun"><br>
        
        <label for="kode_wilayah">Kode Wilayah:</label>
        <input type="text" id="kode_wilayah" name="kode_wilayah"><br>
        
        <label for="kode_desa_kelurahan">Kode Desa Kelurahan:</label>
        <input type="text" id="kode_desa_kelurahan" name="kode_desa_kelurahan"><br>
        
        <label for="desa_kelurahan">Desa Kelurahan:</label>
        <input type="text" id="desa_kelurahan" name="desa_kelurahan"><br>
        
        <label for="kode_kecamatan">Kode Kecamatan:</label>
        <input type="text" id="kode_kecamatan" name="kode_kecamatan"><br>
        
        <label for="kode_kabupaten">Kode Kabupaten:</label>
        <input type="text" id="kode_kabupaten" name="kode_kabupaten"><br>
        
        <label for="kode_provinsi">Kode Provinsi:</label>
        <input type="text" id="kode_provinsi" name="kode_provinsi"><br>
        
        <label for="kode_pos">Kode Pos:</label>
        <input type="text" id="kode_pos" name="kode_pos"><br>
        
        <label for="lintang">Lintang:</label>
        <input type="text" id="lintang" name="lintang"><br>
        
        <label for="bujur">Bujur:</label>
        <input type="text" id="bujur" name="bujur"><br>
        
        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="number" id="nomor_telepon" name="nomor_telepon"><br>
        
        <label for="nomor_fax">Nomor Fax:</label>
        <input type="number" id="nomor_fax" name="nomor_fax"><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        
        <label for="website">Website:</label>
        <input type="text" id="website" name="website"><br>
        
        <label for="kebutuhan_khusus">Kebutuhan Khusus:</label>
        <input type="text" id="kebutuhan_khusus" name="kebutuhan_khusus"><br>
        
        <label for="sk_pendirian_sekolah">SK Pendirian Sekolah:</label>
        <input type="text" id="sk_pendirian_sekolah" name="sk_pendirian_sekolah"><br>
        
        <label for="tanggal_sk_pendirian">Tanggal SK Pendirian:</label>
        <input type="date" id="tanggal_sk_pendirian" name="tanggal_sk_pendirian"><br>
        
        <label for="status_kepemilikan">Status Kepemilikan:</label>
        <input type="text" id="status_kepemilikan" name="status_kepemilikan"><br>
        
        <label for="yayasan">Yayasan:</label>
        <input type="text" id="yayasan" name="yayasan"><br>
        
        <label for="sk_izin_operasional">SK Izin Operasional:</label>
        <input type="text" id="sk_izin_operasional" name="sk_izin_operasional"><br>
        
        <label for="tanggal_sk_izin_operasional">Tanggal SK Izin Operasional:</label>
        <input type="date" id="tanggal_sk_izin_operasional" name="tanggal_sk_izin_operasional"><br>
        
        <label for="no_rekening">No Rekening:</label>
        <input type="number" id="no_rekening" name="no_rekening"><br>
        
        <label for="nama_bank">Nama Bank:</label>
        <input type="text" id="nama_bank" name="nama_bank"><br>
        
        <label for="cabang_kcp_unit">Cabang KCP Unit:</label>
        <input type="text" id="cabang_kcp_unit" name="cabang_kcp_unit"><br>
        
        <label for="rekening_atas_nama">Rekening Atas Nama:</label>
        <input type="text" id="rekening_atas_nama" name="rekening_atas_nama"><br>
        
        <label for="mbs">MBs:</label>
        <input type="number" id="mbs" name="mbs"><br>
        
        <label for="npwp">NPWP:</label>
        <input type="text" id="npwp" name="npwp"><br>
        
        <label for="nm_wp">NM WP:</label>
        <input type="text" id="nm_wp" name="nm_wp"><br>
        
        <label for="keaktifan">Keaktifan:</label>
        <input type="text" id="keaktifan" name="keaktifan"><br>
        
        <label for="flag">Flag:</label>
        <input type="text" id="flag" name="flag"><br>
        
        <label for="wilayah_terpencil">Wilayah Terpencil:</label>
        <input type="text" id="wilayah_terpencil" name="wilayah_terpencil"><br>
        
        <label for="wilayah_perbatasan">Wilayah Perbatasan:</label>
        <input type="text" id="wilayah_perbatasan" name="wilayah_perbatasan"><br>
        
        <label for="wilayah_transmigrasi">Wilayah Transmigrasi:</label>
        <input type="text" id="wilayah_transmigrasi" name="wilayah_transmigrasi"><br>
        
        <label for="wilayah_adat_terpencil">Wilayah Adat Terpencil:</label>
        
        <input type="text" id="wilayah_adat_terpencil" name="wilayah_adat_terpencil"><br>
        
        <label for="wilayah_bencana_alam">Wilayah Bencana Alam:</label>
        <input type="text" id="wilayah_bencana_alam" name="wilayah_bencana_alam"><br>
        
        <label for="wilayah_bencana_sosial">Wilayah Bencana Sosial:</label>
        <input type="text" id="wilayah_bencana_sosial" name="wilayah_bencana_sosial"><br>
        
        <label for="partisipasi_bos">Partisipasi BOS:</label>
        <input type="text" id="partisipasi_bos" name="partisipasi_bos"><br>
        
        <label for="waktu_penyelenggaraan">Waktu Penyelenggaraan:</label>
        <input type="text" id="waktu_penyelenggaraan" name="waktu_penyelenggaraan"><br>
        
        <label for="sumber_listrik">Sumber Listrik:</label>
        <input type="text" id="sumber_listrik" name="sumber_listrik"><br>
        
        <label for="sertifikasi_iso">Sertifikasi Iso:</label>
        <input type="text" id="sertifikasi_iso" name="sertifikasi_iso"><br>
        
        <label for="akses_internet">Akses Internet:</label>
        <input type="text" id="akses_internet" name="akses_internet"><br>
        
        <label for="akses_internet_2">Akses Internet2:</label>
        <input type="text" id="akses_internet_2" name="akses_internet_2"><br>
        
        <label for="luas_tanah_milik">Luas Tanah Milik:</label>
        <input type="number" id="luas_tanah_milik" name="luas_tanah_milik"><br>
        
        <label for="luas_tanah_bukan_milik">Luas Tanah Bukan Milik:</label>
        <input type="number" id="luas_tanah_bukan_milik" name="luas_tanah_bukan_milik"><br>
        
        <label for="kode_registrasi">Kode Registrasi:</label>
        <input type="text" id="kode_registrasi" name="kode_registrasi"><br>
        
        <label for="daya_listrik">Daya Listrik:</label>
        <input type="number" id="daya_listrik" name="daya_listrik"><br>
        
        <label for="kontinuitas_listrik">Kontinuitas Listrik:</label>
        <input type="text" id="kontinuitas_listrik" name="kontinuitas_listrik"><br>
        
        <label for="jarak_listrik">Jarak Listrik:</label>
        <input type="number" id="jarak_listrik" name="jarak_listrik"><br>
        
        <button type="submit">Create</button>
    </form>
</body>
</html>
