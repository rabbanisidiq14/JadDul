<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDefaultData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Data-data jadwal
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pendidikan Agama Islam'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pendidikan Pancasila dan Kewarganegaraan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Bahasa Indonesia'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Matematika'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Sejarah'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Bahasa Inggris'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Seni Budaya'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pendidikan Jasmani Olahraga dan Kesehatan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Basa Sunda'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Bimbingan Konseling'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Simulasi dan Komunikasi Digital'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Fisika'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Kimia'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Kerja Bengkel dan Gambar Teknik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Dasar Listrik dan Elektronika'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Teknik Pemrogramman Mikroprosesor dan Mikrokontroler'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Gambar Teknik Listrik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pekerjaan Dasar Elektromekanik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Sistem Komputer'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Komputer dan Jaringan Dasar'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pemrograman Dasar'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Dasar Desain Grafis'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Mikroprosesor dan Mikrokontroler'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Penerapan Rangkaian Elektronika'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Perencanaan dan Instalasi Sistem Audio'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Penerapan Sistem Radio dan Televisi'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Intalasi Penerangan Listrik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Instalasi Motor Listrik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Instalasi Tenaga Listrik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Piranti Sensor dan Aktuator'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Sistem Kontrol Elektropneumatik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Sistem Kontrol Elektromekanik dan Elektronik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Sistem Kontrol Terprogram'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Teknologi Jaringan Berbasis Luas(WAN)'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Admnistrasi Infrastuktur Jaringan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Admnistrasi Sistem Jaringan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Teknologi Layanan Jaringan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pemodelan Perangkat Lunak'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Basis Data'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pemrograman Berorientasi Objek'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pemrograman Web dan Perangkat Bergerak'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Desain Grafis Percetakan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Animasi 2D dan 3D'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Produk Kreatif dan Kewirausahaan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Perawatan dan Perbaikan Peralatan Audio Video'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Perbaikan Perawatan Listrik'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Desain Media Interaktif'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Teknik Pengolahan Audio Video'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
