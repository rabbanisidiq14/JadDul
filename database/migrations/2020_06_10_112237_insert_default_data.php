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
        // Data-Data mata pelajaran RPL kelas 11
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pemrograman Berorientasi Objek'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pemrograman Web dan Perangkat Bergerak'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pemodelan Perangkat Lunak'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Basis Data'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Kewirausahaan dan Produk Kreatif'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pendidikan Agama Islam'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Bahasa Indonesia'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Bahasa Sunda'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pendidikan Kewarganegaraan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Matematika'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Pendidikan Jasmani dan Kesehatan'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Bahasa Inggris'
        ]);
        DB::table('matpel')->insert([
            'nama_matpel' => 'Bimbingan Konseling'
        ]);

        // Guru
        DB::table('guru')->insert([
            'nama_guru' => 'Offy Solehatun,M.Kom.',
            'id_matpel' => 1
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Lukmanul Hakim,M.Kom.',
            'id_matpel' => 1
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Ferry Stephanus Suwita,M.Kom.',
            'id_matpel' => 2
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Hana Zainab Mukarromah,S.Kom.',
            'id_matpel' => 2
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Yuyun Tresnawati,M.Kom.',
            'id_matpel' => 3
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Ali Aljauhari,S.Kom.',
            'id_matpel' => 4
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Rina Pujiati,S.Kom.',
            'id_matpel' => 4
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Pak Iman',
            'id_matpel' => 5
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Jajat Sudrajat,S.Kom.',
            'id_matpel' => 5
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Pak Deddy',
            'id_matpel' => 6
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Pak Jafar',
            'id_matpel' => 7
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Pak Rizal',
            'id_matpel' => 8
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Bu Alis',
            'id_matpel' => 9
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Bu Susneti',
            'id_matpel' => 10
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Pak Enjang',
            'id_matpel' => 11
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Pak Nana',
            'id_matpel' => 11
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Bu Dewi',
            'id_matpel' => 12
        ]);
        DB::table('guru')->insert([
            'nama_guru' => 'Bu BK',
            'id_matpel' => 13
        ]);

        // Kelas 11 RPL
        DB::table('kelas')->insert([
            'nama_kelas' => 'XI RPL 1',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XI RPL 2',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ]);
        DB::table('kelas')->insert([
            'nama_kelas' => 'XI RPL 3',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ]);

        // Ruangan
        DB::table('ruangan')->insert([
            'gedung' => 'A',
            'nama_ruangan' => 'A.2.1'
        ]);
        DB::table('ruangan')->insert([
            'gedung' => 'A',
            'nama_ruangan' => 'A.2.2'
        ]);
        DB::table('ruangan')->insert([
            'gedung' => 'A',
            'nama_ruangan' => 'A.2.3'
        ]);
        DB::table('ruangan')->insert([
            'gedung' => 'A',
            'nama_ruangan' => 'A.2.4'
        ]);
        DB::table('ruangan')->insert([
            'gedung' => 'A',
            'nama_ruangan' => 'A.2.5'
        ]);
        DB::table('ruangan')->insert([
            'gedung' => 'A',
            'nama_ruangan' => 'A.2.6'
        ]);

        // Jadwal XI RPL 1
        DB::table('jadwal')->insert([
            'hari' => 'Senin',
            'pel_begin' => '07.15',
            'pel_end' => '10.15',
            'id_ruangan' => 1,
            'id_kelas' => 1,
            'id_matpel' => 2,
            'id_guru' => 3
        ]);
        DB::table('jadwal')->insert([
            'hari' => 'Selasa',
            'pel_begin' => '07.15',
            'pel_end' => '10.15',
            'id_ruangan' => 1,
            'id_kelas' => 2,
            'id_matpel' => 1,
            'id_guru' => 2
        ]);
        DB::table('jadwal')->insert([
            'hari' => 'Rabu',
            'pel_begin' => '07.15',
            'pel_end' => '10.15',
            'id_ruangan' => 2,
            'id_kelas' => 3,
            'id_matpel' => 1,
            'id_guru' => 1
        ]);
        DB::table('jadwal')->insert([
            'hari' => 'Kamis',
            'pel_begin' => '07.15',
            'pel_end' => '10.15',
            'id_ruangan' => 5,
            'id_kelas' => 2,
            'id_matpel' => 3,
            'id_guru' => 5
        ]);
        DB::table('jadwal')->insert([
            'hari' => 'Jumat',
            'pel_begin' => '07.15',
            'pel_end' => '10.15',
            'id_ruangan' => 3,
            'id_kelas' => 1,
            'id_matpel' => 2,
            'id_guru' => 2
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
