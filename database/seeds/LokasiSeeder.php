<?php

use Illuminate\Database\Seeder;
use App\Lokasi;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lokasi::create([
            'id' => '1',
            'foto' => 'post-images/9pSpMyEVUNyBbAolvzFgjS72ZRrHpCRk3cUNYxYE.jpg',
            'nama_kota' => 'Cilegon',
            'lokasi_seo' => 'cilegon'
        ]);

        Lokasi::create([
            'foto' => 'post-images/lOr4bS5cwjlGHnNorpAIVHHqtpFFRBrKr5es8CUH.jpg',
            'nama_kota' => 'Bandung',
            'lokasi_seo' => 'bandung'
        ]);

        Lokasi::create([
            'id' => '2',
            'foto' => 'post-images/xaLBh3SU4H6noyLoIgrlYjuGswFsHDFCY0809S2J.jpg',
            'nama_kota' => 'Jakarta',
            'lokasi_seo' => 'jakarta'
        ]);

        Lokasi::create([
            'id' => '8',
            'foto' => 'post-images/Bg1TXHOMDCKkXZUssLaB9dQLXCCIOkseVD8iXYxF.jpg',
            'nama_kota' => 'Jogja',
            'lokasi_seo' => 'jogja'
        ]);

        Lokasi::create([
            'id' => '5',
            'foto' => 'post-images/vsvr5Z02I3Rb1WQyzY8IYNpTOUHER8xkIskCnOP2.jpg',
            'nama_kota' => 'Surabaya',
            'lokasi_seo' => 'surabaya'
        ]);

        Lokasi::create([
            'id' => '7',
            'foto' => 'post-images/1J4t9OouKZ9wcPqQtceorV2YmiAFD362a4zNrtTk.jpg',
            'nama_kota' => 'Semarang',
            'lokasi_seo' => 'semarang'
        ]);
    }
}
