@extends('layouts.app')
  
@section('title', 'Show Siswa')
  
@section('contents')
    <h1 class="mb-0">Detail Siswa</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIPD</label>
            <input type="text" name="NIPD" class="form-control" placeholder="NIPD" value="{{ $siswa->NIPD }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NISN</label>
            <input type="text" name="NISN" class="form-control" placeholder="NISN" value="{{ $siswa->NISN }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $siswa->Nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis_Kelamin</label>
            <input type="text" name="Jenis_Kelamin" class="form-control" placeholder="Jenis_Kelamin" value="{{ $siswa->Jenis_Kelamin }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Agama</label>
            <input type="text" name="Agama" class="form-control" placeholder="Agama" value="{{ $siswa->Agama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tempat</label>
            <input type="text" name="Tempat" class="form-control" placeholder="Tempat" value="{{ $siswa->Tempat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal_Lahir</label>
            <input type="text" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal_Lahir" value="{{ $siswa->Tanggal_Lahir }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="NIK" class="form-control" placeholder="NIK" value="{{ $siswa->NIK }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No_KK</label>
            <input type="text" name="No_KK" class="form-control" placeholder="No_KK" value="{{ $siswa->No_KK }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ID_Bantuan</label>
            <input type="text" name="ID_Bantuan" class="form-control" placeholder="ID_Bantuan" value="{{ $siswa->ID_Bantuan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID_Detail_Siswa</label>
            <input type="text" name="ID_Detail_Siswa" class="form-control" placeholder="ID_Detail_Siswa" value="{{ $siswa->ID_Detail_Siswa }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">ID_Tempat_Tinggal</label>
            <input type="text" name="ID_Tempat_Tinggal" class="form-control" placeholder="ID_Tempat_Tinggal" value="{{ $siswa->ID_Tempat_Tinggal }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No_Akta_Kelahiran</label>
            <input type="text" name="No_Akta_Kelahiran" class="form-control" placeholder="No_Akta_Kelahiran" value="{{ $siswa->No_Akta_Kelahiran }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kebutuhan_Khusus</label>
            <input type="text" name="Kebutuhan_Khusus" class="form-control" placeholder="Kebutuhan_Khusus" value="{{ $siswa->Kebutuhan_Khusus }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sekolah_Asal</label>
            <input type="text" name="Sekolah_Asal" class="form-control" placeholder="Sekolah_Asal" value="{{ $siswa->Sekolah_Asal }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Anak_Ke</label>
            <input type="text" name="Anak_Ke" class="form-control" placeholder="Anak_Ke" value="{{ $siswa->Anak_Ke }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jumlah_Saudara</label>
            <input type="text" name="Jumlah_Saudara" class="form-control" placeholder="Jumlah_Saudara" value="{{ $siswa->Jumlah_Saudara }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $siswa->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $siswa->updated_at }}" readonly>
        </div>
    </div>
@endsection