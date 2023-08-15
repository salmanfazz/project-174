@extends('layouts.app')
  
@section('contents')
    <h1 class="mb-0">Data Siswa</h1>
    <hr />
    <form action="{{ route('siswas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NIPD" class="form-control" placeholder="NIPD">
            </div>
            <div class="col">
                <input type="text" name="NISN" class="form-control" placeholder="NISN">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input class="form-control" name="Jenis_Kelamin" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Agama" class="form-control" placeholder="Agama">
            </div>
            <div class="col">
                <input type="text" name="Tempat" class="form-control" placeholder="Tempat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
            <div class="col">
                <input class="form-control" name="Rombel" placeholder="Rombongan Belajar">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Sekolah Asal" class="form-control" placeholder="Sekolah Asal">
            </div>
        </div>
        <h1 class="mb-0">Detail Siswa</h1>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NIK" class="form-control" placeholder="NIK">
            </div>
            <div class="col">
                <input type="text" name="No_KK" class="form-control" placeholder="Nomer KK">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="No_Akte" class="form-control" placeholder="No Registrasi Akte Kelahiran">
            </div>
            <div class="col">
                <input type="text" name="Jumlah" class="form-control" placeholder="Jumlah Saudara">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Anak" class="form-control" placeholder="Anak Ke-">
            </div>
            <div class="col">
                <input type="text" name="Kebutuhan_Khusus" class="form-control" placeholder="Kebutuhan Khusus">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Berat" class="form-control" placeholder="Berat Badan">
            </div>
            <div class="col">
                <input type="text" name="Tinggi" class="form-control" placeholder="Tinggi Badan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Lingkar_Kepala" class="form-control" placeholder="Lingkar Kepala">
            </div>
        </div>
        <h1 class="mb-0">Alamat</h1>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col">
                <input type="text" name="RT" class="form-control" placeholder="RT">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="RW" class="form-control" placeholder="RW">
            </div>
            <div class="col">
                <input type="text" name="Dusun" class="form-control" placeholder="Dusun">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Kelurahan" class="form-control" placeholder="Kelurahan">
            </div>
            <div class="col">
                <input type="text" name="Kecamatan" class="form-control" placeholder="Kecamatan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Kode_Pos" class="form-control" placeholder="Kode Pos">
            </div>
            <div class="col">
                <input type="text" name="Jenis_Tempat_Tinggal" class="form-control" placeholder="Jenis Tempat Tinggal">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Transportasi" class="form-control" placeholder="Transportasi">
            </div>
            <div class="col">
                <input type="text" name="Lintang" class="form-control" placeholder="Lintang">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Bujur" class="form-control" placeholder="Bujur">
            </div>
            <div class="col">
                <input type="text" name="Jarak" class="form-control" placeholder="Jarak Rumah - Sekolah">
            </div>
        </div>
        <h1 class="mb-0">Data Orang Tua / Wali</h1>
        <h2>Data Ayah</h2>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NIK_Ayah" class="form-control" placeholder="NIK">
            </div>
            <div class="col">
                <input type="text" name="Nama_Ayah" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Tahun_Ayah" class="form-control" placeholder="Tahun Lahir">
            </div>
            <div class="col">
                <input type="text" name="Jenjang_Ayah" class="form-control" placeholder="Jenjang Pendidikan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Pekerjaan_Ayah" class="form-control" placeholder="Pekerjaan">
            </div>
            <div class="col">
                <input type="text" name="Penghasilan_Ayah" class="form-control" placeholder="Penghasilan">
            </div>
        </div>
        <h2>Data Ibu</h2>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NIK_Ibu" class="form-control" placeholder="NIK">
            </div>
            <div class="col">
                <input type="text" name="Nama_Ibu" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Tahun_Ibu" class="form-control" placeholder="Tahun Lahir">
            </div>
            <div class="col">
                <input type="text" name="Jenjang_Ibu" class="form-control" placeholder="Jenjang Pendidikan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Pekerjaan_Ibu" class="form-control" placeholder="Pekerjaan">
            </div>
            <div class="col">
                <input type="text" name="Penghasilan_Ibu" class="form-control" placeholder="Penghasilan">
            </div>
        </div>
        <h2>Data Wali</h2>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NIK_Wali" class="form-control" placeholder="NIK">
            </div>
            <div class="col">
                <input type="text" name="Nama_Wali" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Tahun_Wali" class="form-control" placeholder="Tahun Lahir">
            </div>
            <div class="col">
                <input type="text" name="Jenjang_Wali" class="form-control" placeholder="Jenjang Pendidikan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Pekerjaan_Wali" class="form-control" placeholder="Pekerjaan">
            </div>
            <div class="col">
                <input type="text" name="Penghasilan_Wali" class="form-control" placeholder="Penghasilan">
            </div>
        </div>
        <h1 class="mb-0">Penerima Bantuan</h1>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="KPS" class="form-control" placeholder="Penerima KPS">
            </div>
            <div class="col">
                <input type="text" name="No_KPS" class="form-control" placeholder="No kPS">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="KIP" class="form-control" placeholder="KIP">
            </div>
            <div class="col">
                <input type="text" name="No_KIP" class="form-control" placeholder="No KIP">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Nama_KIP" class="form-control" placeholder="Nama KIP">
            </div>
            <div class="col">
                <input type="text" name="Layak_PIP" class="form-control" placeholder="Layak KIP">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Alasan" class="form-control" placeholder="Alasan">
            </div>
            <div class="col">
                <input type="text" name="Bank" class="form-control" placeholder="Bank">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="No_Rek" class="form-control" placeholder="Nomer Rekening">
            </div>
            <div class="col">
                <input type="text" name="Nama_Rek" class="form-control" placeholder="Nama Rekening">
            </div>
        </div>
        <h1 class="mb-0">Data Ujian</h1>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="SKHUN" class="form-control" placeholder="SKHUN">
            </div>
            <div class="col">
                <input type="text" name="No_UN" class="form-control" placeholder="Nomer Ujian Nasional">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="No_Ijazah" class="form-control" placeholder="Ijazah">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection