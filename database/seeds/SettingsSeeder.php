<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            "nama_aplikasi"=>'Aspirasi Ku',
            "deskripsi_aplikasi"=> 'Layanan Pengaduan Masyarakat'
        ]);
    }
}
