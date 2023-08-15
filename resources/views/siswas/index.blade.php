@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Siswa</h1>
        <a href="{{ route('siswas.create') }}" class="btn btn-primary">Add Siswa</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>NIPD</th><th>NISN</th><th>Nama</th><th>Jenis_Kelamin</th><th>Agama</th><th>Tempat</th><th>Tanggal_Lahir</th><th>Rombel</th> <th>Sekolah_Asal</th> 
                    <th>NIK</th> <th>No_KK</th> <th>No_Akte</th> <th>Jumlah</th> <th>Anak</th> <th>Kebutuhan_Khusus</th> <th>Berat</th> <th>Tinggi</th> <th>Lingkar_Kepala</th> 
                    <th>Alamat</th> <th>RT</th> <th>RW</th> <th>Dusun</th> <th>Kecamatan</th> <th>Kelurahan</th> <th>Kecamatan</th> <th>Kode_Pos</th> <th>Jenis_Tinggal</th> <th>Transportasi</th> <th>Lintang</th> <th>Bujur</th> <th>Jarak_Rumah</th> 
                    <th>NIK_Ayah</th> <th>Nama_Ayah</th> <th>Tahun_Ayah</th> <th>Jenjang_Ayah</th> <th>Pekerjaan_Ayah</th> <th>Penghasilan_Ayah</th>
                    <th>NIK_Ibu</th> <th>Nama_Ibu</th> <th>Tahun_Ibu</th> <th>Jenjang_Ibu</th> <th>Pekerjaan_Ibu</th> <th>Penghasilan_Ibu</th>
                    <th>NIK_Wali</th> <th>Nama_Wali</th> <th>Tahun_Wali</th> <th>Jenjang_Wali</th> <th>Pekerjaan_Wali</th> <th>Penghasilan_Wali</th>
                    <th>Penerima_KPS</th> <th>No_KPS</th> <th>Penerima_KIP</th> <th>No_KIP</th> <th>Nama_KIP</th> <th>Layak_PIP</th> <th>Alasan_PIP</th> <th>Bank</th> <th>No_Rek</th> <th>Nama_Rek</th>
                    <th>SKHUN</th> <th>No_UN</th> <th>Ijazah</th>
                </tr>
            </thead>
            <tbody>
                @if($siswa->count() > 0)
                    @foreach($siswa as $sis)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $sis->NIPD }}</td> 
                            <td class="align-middle">{{ $sis->NISN }}</td> 
                            <td class="align-middle">{{ $sis->Nama }}</td> 
                            <td class="align-middle">{{ $sis->Jenis_Kelamin }}</td> 
                            <td class="align-middle">{{ $sis->Agama }}</td> 
                            <td class="align-middle">{{ $sis->Tempat }}</td> 
                            <td class="align-middle">{{ $sis->Tanggal_Lahir }}</td> 
                            <td class="align-middle">{{ $sis->Rombel }}</td> 
                            <td class="align-middle">{{ $sis->Sekolah_Asal }}</td> 
                            <td class="align-middle">{{ $sis->NIK }}</td> 
                            <td class="align-middle">{{ $sis->No_KK }}</td> 
                            <td class="align-middle">{{ $sis->No_Akte }}</td> 
                            <td class="align-middle">{{ $sis->Jumlah }}</td> 
                            <td class="align-middle">{{ $sis->Anak }}</td> 
                            <td class="align-middle">{{ $sis->Kebutuhan_Khusus }}</td> 
                            <td class="align-middle">{{ $sis->Berat }}</td> 
                            <td class="align-middle">{{ $sis->Tinggi }}</td> 
                            <td class="align-middle">{{ $sis->Lingkar_Kepala }}</td> 
                            <td class="align-middle">{{ $sis->Alamat }}</td> 
                            <td class="align-middle">{{ $sis->RT }}</td> 
                            <td class="align-middle">{{ $sis->RW }}</td> 
                            <td class="align-middle">{{ $sis->Dusun }}</td> 
                            <td class="align-middle">{{ $sis->Kelurahan }}</td> 
                            <td class="align-middle">{{ $sis->Kecamatan }}</td> 
                            <td class="align-middle">{{ $sis->Kode_Pos }}</td> 
                            <td class="align-middle">{{ $sis->Jenis_Tempat_Tinggal }}</td> 
                            <td class="align-middle">{{ $sis->Transportasi }}</td> 
                            <td class="align-middle">{{ $sis->Lintang }}</td> 
                            <td class="align-middle">{{ $sis->Bujur }}</td> 
                            <td class="align-middle">{{ $sis->Jarak }}</td> 
                            <td class="align-middle">{{ $sis->NIK_Ayah }}</td> 
                            <td class="align-middle">{{ $sis->Nama_Ayah }}</td> 
                            <td class="align-middle">{{ $sis->Tahun_Ayah }}</td> 
                            <td class="align-middle">{{ $sis->Jenjang_Ayah }}</td> 
                            <td class="align-middle">{{ $sis->Pekerjaan_Ayah }}</td> 
                            <td class="align-middle">{{ $sis->Penghasilan_Ayah }}</td> 
                            <td class="align-middle">{{ $sis->NIK_Ibu }}</td> 
                            <td class="align-middle">{{ $sis->Nama_Ibu }}</td> 
                            <td class="align-middle">{{ $sis->Tahun_Ibu }}</td> 
                            <td class="align-middle">{{ $sis->Jenjang_Ibu }}</td> 
                            <td class="align-middle">{{ $sis->Pekerjaan_Ibu }}</td> 
                            <td class="align-middle">{{ $sis->Penghasilan_Ibu }}</td>
                            <td class="align-middle">{{ $sis->NIK_Wali }}</td> 
                            <td class="align-middle">{{ $sis->Nama_Wali }}</td> 
                            <td class="align-middle">{{ $sis->Tahun_Wali }}</td> 
                            <td class="align-middle">{{ $sis->Jenjang_Wali }}</td> 
                            <td class="align-middle">{{ $sis->Pekerjaan_Wali }}</td> 
                            <td class="align-middle">{{ $sis->Penghasilan_Wali }}</td> 
                            <td class="align-middle">{{ $sis->KPS }}</td> 
                            <td class="align-middle">{{ $sis->No_KPS }}</td> 
                            <td class="align-middle">{{ $sis->KIP }}</td> 
                            <td class="align-middle">{{ $sis->No_KIP }}</td> 
                            <td class="align-middle">{{ $sis->Nama_KIP }}</td> 
                            <td class="align-middle">{{ $sis->Layak_PIP }}</td> 
                            <td class="align-middle">{{ $sis->Alasan }}</td> 
                            <td class="align-middle">{{ $sis->Bank }}</td> 
                            <td class="align-middle">{{ $sis->No_Rek }}</td> 
                            <td class="align-middle">{{ $sis->Nama_Rek }}</td> 
                            <td class="align-middle">{{ $sis->SKHUN }}</td> 
                            <td class="align-middle">{{ $sis->No_UN }}</td> 
                            <td class="align-middle">{{ $sis->No_Ijazah }}</td> 
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('siswas.show', $sis->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="{{ route('siswas.edit', $sis->id)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('siswas.destroy', $sis->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-0">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Siswa not found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection