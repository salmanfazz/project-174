<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIPD','NISN','Nama','Jenis_Kelamin','Agama','Tempat','Tanggal_Lahir','Rombel', 'Sekolah_Asal', 
        'NIK', 'No_KK', 'No_Akte', 'Jumlah', 'Anak', 'Kebutuhan_Khusus', 'Berat', 'Tinggi', 'Lingkar_Kepala', 
        'Alamat', 'RT', 'RW', 'Dusun', 'Kecamatan', 'Kelurahan', 'Kecamatan', 'Kode_Pos', 'Jenis_Tempat_Tinggal', 'Transportasi', 'Lintang', 'Bujur', 'Jarak', 
        'NIK_Ayah', 'Nama_Ayah', 'Tahun_Ayah', 'Jenjang_Ayah', 'Pekerjaan_Ayah', 'Penghasilan_Ayah',
        'NIK_Ibu', 'Nama_Ibu', 'Tahun_Ibu', 'Jenjang_Ibu', 'Pekerjaan_Ibu', 'Penghasilan_Ibu',
        'NIK_Wali', 'Nama_Wali', 'Tahun_Wali', 'Jenjang_Wali', 'Pekerjaan_Wali', 'Penghasilan_Wali',
        'KPS', 'No_KPS', 'KIP', 'No_KIP', 'Nama_KIP', 'Layak_PIP', 'Alasan', 'Bank', 'No_Rek', 'Nama_Rek',
        'SKHUN', 'No_UN', 'No_Ijazah'
    ];
    
}
