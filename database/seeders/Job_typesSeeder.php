<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Job_typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sebelum aku buat seeder ini kan, sebelumnya aku dah inputkan data" nya di db secara manual tapi itu otomatis kalau orang lain input form unggahan baru tipe pekerjaan & kategorinya kgk nampil
        // mba nya ngerti seeder kan? jadi seeder itu bukan insert dari user ke database, tapi kita sbg dev isi manual, jadi kalo user mau input type & cat job baru
        // errornya bukan disini
        DB::table('job_types')->insert([
            [
                'tipe_pekerjaan' => 'Akuntansi / Keuangan',
            ],
            [
                'tipe_pekerjaan' => 'Sumber Daya Manusia / Personalia',
            ],
            [
                'tipe_pekerjaan' => 'Penjualan / Pemasaran',
            ],
            [
                'tipe_pekerjaan' => 'Seni/Media/Komunikasi',
            ],
            [
                'tipe_pekerjaan' => 'Pelayanan',
            ],
            [
                'tipe_pekerjaan' => 'Hotel/Restoran',
            ],
            [
                'tipe_pekerjaan' => 'Pendidikan/Pelatihan',
            ],
            [
                'tipe_pekerjaan' => 'Komputer/Teknologi Informasi',
            ],
            [
                'tipe_pekerjaan' => 'Teknik',
            ],
            [
                'tipe_pekerjaan' => 'Manufaktur',
            ],
            [
                'tipe_pekerjaan' => 'Bangunan/Konstruksi',
            ],
            [
                'tipe_pekerjaan' => 'Sains',
            ],
            [
                'tipe_pekerjaan' => 'Layanan Kesehatan',
            ],
            [
                'tipe_pekerjaan' => 'Lainnya',
            ]
        ]);
    }
}
