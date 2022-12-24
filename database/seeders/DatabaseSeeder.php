<?php

namespace Database\Seeders;

use App\Models\Kartukeluarga;
use App\Models\Databantuan;
use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Kartukeluarga::create([
            'nomorkk' => '3515142501096735',
            'nama' => 'Kasan'
        ]);

        Penduduk::create([
            'nomorkk' => '3515142501096735',
            'nik' => '3515140405650004',
            'nama' => 'Kasan',
            'tempatlahir' => 'Sidoarjo',
            'tanggallahir' => '1965-5-4',
            'agama' => 'Islam',
            'jeniskelamin' => 'Laki-laki',
            'pendidikan' => 'SLTA/Sederajat',
            'pekerjaan' => 'Pegawai Swasta',
            'pernikahan' => 'Sudah Kawin',
            'status' => 'Kepala Keluarga',
            'kewarganegaraan' => 'WNI',
            'namaayah' => 'Seman',
            'namaibu' => 'Arti'
        ]);
        
        Penduduk::create([
            'nomorkk' => '3515142501096735',
            'nik' => '351514571190003',
            'nama' => 'Siti Nur Zaah',
            'tempatlahir' => 'Sidoarjo',
            'tanggallahir' => '1979-11-17',
            'agama' => 'Islam',
            'jeniskelamin' => 'Perempuan',
            'pendidikan' => 'SLTP/Sederajat',
            'pekerjaan' => 'Ibu Rumah Tangga',
            'pernikahan' => 'Sudah Kawin',
            'status' => 'Istri',
            'kewarganegaraan' => 'WNI',
            'namaayah' => 'Tohiran',
            'namaibu' => 'Seniti'
        ]);

        Penduduk::create([
            'nomorkk' => '3515142501096735',
            'nik' => '3515142504010002',
            'nama' => 'Eren Dio Sefrila',
            'tempatlahir' => 'Sidoarjo',
            'tanggallahir' => '2001-4-25',
            'agama' => 'Islam',
            'jeniskelamin' => 'Laki-laki',
            'pendidikan' => 'SLTA/Sederajat',
            'pekerjaan' => 'Pelajar',
            'pernikahan' => 'Belum Kawin',
            'status' => 'Anak',
            'kewarganegaraan' => 'WNI',
            'namaayah' => 'Kasan',
            'namaibu' => 'Siti Nur Zaah'
        ]);

        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);

        User::create([
            'username' => 'erendio',
            'password' => Hash::make('erendio')
        ]);

        User::create([
            'username' => 'petugas1',
            'password' => Hash::make('petugas1')
        ]);

        User::create([
            'username' => 'petugas2',
            'password' => Hash::make('petugas2')
        ]);

        User::create([
            'username' => 'petugas3',
            'password' => Hash::make('petugas3')
        ]);

        User::create([
            'username' => 'petugas4',
            'password' => Hash::make('petugas4')
        ]);

        User::create([
            'username' => 'petugas5',
            'password' => Hash::make('petugas5')
        ]);

        User::create([
            'username' => 'petugas6',
            'password' => Hash::make('petugas6')
        ]);

        User::create([
            'username' => 'petugas7',
            'password' => Hash::make('petugas7')
        ]);

        User::create([
            'username' => 'petugas8',
            'password' => Hash::make('petugas8')
        ]);

        User::create([
            'username' => 'petugas9',
            'password' => Hash::make('petugas9')
        ]);

        User::create([
            'username' => 'petugas10',
            'password' => Hash::make('petugas10')
        ]);

        User::create([
            'username' => 'petugas11',
            'password' => Hash::make('petugas11')
        ]);

        User::create([
            'username' => 'petugas12',
            'password' => Hash::make('petugas12')
        ]);
        User::create([
            'username' => 'petugas13',
            'password' => Hash::make('petugas13')
        ]);

        User::create([
            'username' => 'petugas14',
            'password' => Hash::make('petugas14')
        ]);

        User::create([
            'username' => 'petugas15',
            'password' => Hash::make('petugas15')
        ]);

        User::create([
            'username' => 'petugas16',
            'password' => Hash::make('petugas16')
        ]);

        User::create([
            'username' => 'petugas17',
            'password' => Hash::make('petugas17')
        ]);

        User::create([
            'username' => 'petugas18',
            'password' => Hash::make('petugas18')
        ]);
    }
}
