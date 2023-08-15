@extends('layouts.app')
  
@section('title', 'Edit Siswa')
  
@section('contents')
    <h1 class="mb-0">Edit Siswa</h1>
    <hr />
    <form action="{{ route('siswas.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIPD</label>
            <input type="text" name="NIPD" class="form-control" placeholder="NIPD" value="{{ $siswa->NIPD }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">NISN</label>
            <input type="text" name="NISN" class="form-control" placeholder="NISN" value="{{ $siswa->NISN }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" placeholder="Nama" value="{{ $siswa->Nama }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis_Kelamin</label>
            <input type="text" name="Jenis_Kelamin" class="form-control" placeholder="Jenis_Kelamin" value="{{ $siswa->Jenis_Kelamin }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Agama</label>
            <input type="text" name="Agama" class="form-control" placeholder="Agama" value="{{ $siswa->Agama }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Tempat</label>
            <input type="text" name="Tempat" class="form-control" placeholder="Tempat" value="{{ $siswa->Tempat }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal_Lahir</label>
            <input type="text" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal_Lahir" value="{{ $siswa->Tanggal_Lahir }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="NIK" class="form-control" placeholder="NIK" value="{{ $siswa->NIK }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No_KK</label>
            <input type="text" name="No_KK" class="form-control" placeholder="No_KK" value="{{ $siswa->No_KK }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">ID_Bantuan</label>
            <input type="text" name="ID_Bantuan" class="form-control" placeholder="ID_Bantuan" value="{{ $siswa->ID_Bantuan }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID_Detail_Siswa</label>
            <input type="text" name="ID_Detail_Siswa" class="form-control" placeholder="ID_Detail_Siswa" value="{{ $siswa->ID_Detail_Siswa }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">ID_Tempat_Tinggal</label>
            <input type="text" name="ID_Tempat_Tinggal" class="form-control" placeholder="ID_Tempat_Tinggal" value="{{ $siswa->ID_Tempat_Tinggal }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No_Akta_Kelahiran</label>
            <input type="text" name="No_Akta_Kelahiran" class="form-control" placeholder="No_Akta_Kelahiran" value="{{ $siswa->No_Akta_Kelahiran }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Kebutuhan_Khusus</label>
            <input type="text" name="Kebutuhan_Khusus" class="form-control" placeholder="Kebutuhan_Khusus" value="{{ $siswa->Kebutuhan_Khusus }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sekolah_Asal</label>
            <input type="text" name="Sekolah_Asal" class="form-control" placeholder="Sekolah_Asal" value="{{ $siswa->Sekolah_Asal }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Anak_Ke</label>
            <input type="text" name="Anak_Ke" class="form-control" placeholder="Anak_Ke" value="{{ $siswa->Anak_Ke }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jumlah_Saudara</label>
            <input type="text" name="Jumlah_Saudara" class="form-control" placeholder="Jumlah_Saudara" value="{{ $siswa->Jumlah_Saudara }}" >
        </div>
    </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection