<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class Job_kategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_category')->insert([
            [
                'tipe_pekerjaan_id' => '1',
                'kategori_pekerjaan' => 'Audit dan Pajak'
            ],
            [
                'tipe_pekerjaan_id' => '1',
                'kategori_pekerjaan' => 'Akuntansi Umum/Pembiayaan'
            ],
            [
                'tipe_pekerjaan_id' => '1',
                'kategori_pekerjaan' => 'Keuangan/Investasi Perusahaan'
            ],
            [
                'tipe_pekerjaan_id' => '1',
                'kategori_pekerjaan' => 'Perbankan/Jasa Finansial'
            ],

            [
                'tipe_pekerjaan_id' => '2',
                'kategori_pekerjaan' => 'Staf/Administrasi Umum'
            ],
            [
                'tipe_pekerjaan_id' => '2',
                'kategori_pekerjaan' => 'Sumber Daya Manusia/HR'
            ],
            [
                'tipe_pekerjaan_id' => '2',
                'kategori_pekerjaan' => 'Sekretaris'
            ],
            [
                'tipe_pekerjaan_id' => '2',
                'kategori_pekerjaan' => 'Top Management/Manajemen Tingkat Atas'
            ],

            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Pemasaran/Pengembangan Bisnis'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Penjualan - Korporasi'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Penjualan - Teknik/Teknikal/IT'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Penjualan - Jasa Keuangan'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Penjualan Ritel'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Merchandising'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Telesales/Telemarketing'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'E-commerce'
            ],
            [
                'tipe_pekerjaan_id' => '3',
                'kategori_pekerjaan' => 'Digital Marketing'
            ],

            [
                'tipe_pekerjaan_id' => '4',
                'kategori_pekerjaan' => 'Periklanan'
            ],
            [
                'tipe_pekerjaan_id' => '4',
                'kategori_pekerjaan' => 'Seni/Desain Kreatif'
            ],
            [
                'tipe_pekerjaan_id' => '4',
                'kategori_pekerjaan' => 'Hiburan'
            ],
            [
                'tipe_pekerjaan_id' => '4',
                'kategori_pekerjaan' => 'Hubungan Masyarakat'
            ],

            [
                'tipe_pekerjaan_id' => '5',
                'kategori_pekerjaan' => 'Perawatan Pribadi'
            ],
            [
                'tipe_pekerjaan_id' => '5',
                'kategori_pekerjaan' => 'Angkatan Bersenjata'
            ],
            [
                'tipe_pekerjaan_id' => '5',
                'kategori_pekerjaan' => 'Layanan Sosial/Konseling'
            ],
            [
                'tipe_pekerjaan_id' => '5',
                'kategori_pekerjaan' => 'Layanan Pelanggan'
            ],
            [
                'tipe_pekerjaan_id' => '5',
                'kategori_pekerjaan' => 'Pengacara / Asisten Legal'
            ],
            [
                'tipe_pekerjaan_id' => '5',
                'kategori_pekerjaan' => 'Logistisk/Rantai Pasokan'
            ],
            [
                'tipe_pekerjaan_id' => '5',
                'kategori_pekerjaan' => 'Teknikal dan Bantuan Pelanggan'
            ],

            [
                'tipe_pekerjaan_id' => '6',
                'kategori_pekerjaan' => 'Makanan/Minuman/Pelayanan Restoran'
            ],
            [
                'tipe_pekerjaan_id' => '6',
                'kategori_pekerjaan' => 'Hotel/Pariwisata'
            ],

            [
                'tipe_pekerjaan_id' => '7',
                'kategori_pekerjaan' => 'Pendidikan'
            ],[
                'tipe_pekerjaan_id' => '7',
                'kategori_pekerjaan' => 'Pelatihan dan Pengembangan'
            ],

            [
                'tipe_pekerjaan_id' => '8',
                'kategori_pekerjaan' => 'IT - Perangkat Lunak'
            ],[
                'tipe_pekerjaan_id' => '8',
                'kategori_pekerjaan' => 'IT - Perangkat Keras'
            ],[
                'tipe_pekerjaan_id' => '8',
                'kategori_pekerjaan' => 'IT - Admin Jaringan/Sistem/Database'
            ],

            [
                'tipe_pekerjaan_id' => '9',
                'kategori_pekerjaan' => 'Teknik Kimia'
            ],[
                'tipe_pekerjaan_id' => '9',
                'kategori_pekerjaan' => 'Teknik Elektronika'
            ],[
                'tipe_pekerjaan_id' => '9',
                'kategori_pekerjaan' => 'Teknik Elektro'
            ],[
                'tipe_pekerjaan_id' => '9',
                'kategori_pekerjaan' => 'Teknik Lainnya'
            ],[
                'tipe_pekerjaan_id' => '9',
                'kategori_pekerjaan' => 'Teknik Lingkungan'
            ],
            [
                'tipe_pekerjaan_id' => '9',
                'kategori_pekerjaan' => 'Minyak/Gas'
            ],[
                'tipe_pekerjaan_id' => '9',
                'kategori_pekerjaan' => 'Teknik Industri'
            ],

            [
                'tipe_pekerjaan_id' => '10',
                'kategori_pekerjaan' => 'Pemeliharaan'
            ],[
                'tipe_pekerjaan_id' => '10',
                'kategori_pekerjaan' => 'Pembelian/Manajemen Material'
            ],[
                'tipe_pekerjaan_id' => '10',
                'kategori_pekerjaan' => 'Manufaktur'
            ],[
                'tipe_pekerjaan_id' => '10',
                'kategori_pekerjaan' => 'Kontrol Proses'
            ],[
                'tipe_pekerjaan_id' => '10',
                'kategori_pekerjaan' => 'Penjamin Kualitas /QA'
            ],

            [
                'tipe_pekerjaan_id' => '11',
                'kategori_pekerjaan' => 'Properti/Real Estate'
            ],[
                'tipe_pekerjaan_id' => '11',
                'kategori_pekerjaan' => 'Arsitek/Desain Interior'
            ],[
                'tipe_pekerjaan_id' => '11',
                'kategori_pekerjaan' => 'Teknik Sipil/Konstruksi Bangunan'
            ],[
                'tipe_pekerjaan_id' => '11',
                'kategori_pekerjaan' => 'Survei Kuantitas'
            ],

            [
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Pertanian'
            ],[
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Aktuaria/Statistik'
            ],[
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Teknologi Makanan/Ahli Gizi'
            ],[
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Geologi/Geofisika'
            ],
            [
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Penerbangan'
            ],[
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Bioteknologi'
            ],[
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Sains dan Teknologi'
            ],[
                'tipe_pekerjaan_id' => '12',
                'kategori_pekerjaan' => 'Biomedis'
            ],

            [
                'tipe_pekerjaan_id' => '13',
                'kategori_pekerjaan' => 'Praktisi/Asisten Medis'
            ],[
                'tipe_pekerjaan_id' => '13',
                'kategori_pekerjaan' => 'Farmasi'
            ],[
                'tipe_pekerjaan_id' => '13',
                'kategori_pekerjaan' => 'Diagnosa/Lainnya'
            ],

            [
                'tipe_pekerjaan_id' => '14',
                'kategori_pekerjaan' => 'Jurnalis/Editor'
            ],
            [
                'tipe_pekerjaan_id' => '14',
                'kategori_pekerjaan' => 'Pekerjaan Umum'
            ],[
                'tipe_pekerjaan_id' => '14',
                'kategori_pekerjaan' => 'Lainnya/Kategori tidak tersedia'
            ],[
                'tipe_pekerjaan_id' => '14',
                'kategori_pekerjaan' => 'Penerbitan'
            ]
        ]);
    }
    }