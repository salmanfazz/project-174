<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('NIPD');
            $table->string('NISN');
            $table->string('Nama');
            $table->string('Jenis_Kelamin');
            $table->string('Agama');
            $table->string('Tempat');
            $table->string('Tanggal_Lahir');
            $table->string('Rombel');
            $table->string('Sekolah_Asal');
            $table->string('NIK');
            $table->string('No_KK');
            $table->string('No_Akte');
            $table->string('Jumlah');
            $table->string('Anak');
            $table->string('Kebutuhan_Khusus');
            $table->string('Berat');
            $table->string('Tinggi');
            $table->string('Lingkar_Kepala');
            $table->string('Alamat');
            $table->string('RT');
            $table->string('RW');
            $table->string('Dusun');
            $table->string('Kelurahan');
            $table->string('Kecamatan');
            $table->string('Kode_POS');
            $table->string('Jenis_Tempat_Tinggal');
            $table->string('Transportasi');
            $table->string('Lintang');
            $table->string('Bujur');
            $table->string('Jarak');
            $table->string('NIK_Ayah');
            $table->string('Nama_ayah');
            $table->string('Tahun_Ayah');
            $table->string('Jenjang_Ayah');
            $table->string('Pekerjaan_Ayah');
            $table->string('Penghasilan_Ayah');
            $table->string('NIK_Ibu');
            $table->string('Nama_Ibu');
            $table->string('Tahun_Ibu');
            $table->string('Jenjang_Ibu');
            $table->string('Pekerjaan_Ibu');
            $table->string('Penghasilan_Ibu');
            $table->string('NIK_Wali');
            $table->string('Nama_Wali');
            $table->string('Tahun_Wali');
            $table->string('Jenjang_Wali');
            $table->string('Pekerjaan_Wali');
            $table->string('Penghasilan_Wali');
            $table->string('KPS');
            $table->string('No_KPS');
            $table->string('KIP');
            $table->string('No_KIP');
            $table->string('Nama_KIP');
            $table->string('Layak_PIP');
            $table->string('Alasan');
            $table->string('Bank');
            $table->string('No_Rek');
            $table->string('Nama_Rek');
            $table->string('SKHUN');
            $table->string('No_UN');
            $table->string('No_Ijazah');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};