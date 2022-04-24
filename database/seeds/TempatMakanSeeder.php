<?php

use Illuminate\Database\Seeder;
use App\TempatMakan;

class TempatMakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TempatMakan::create([
            'id' => '1',
            'nama_tempat' => 'Raa Cha',
            'id_lokasi' => '1',
            'tempat_makan_seo' => 'raa-cha',
            'foto' => 'post-images/7AwfykuevQDTTgF35KiDmCIYHVhUtVlomWXr24As.jpg'
        ]);
        TempatMakan::create([
            'id' => '3',
            'nama_tempat' => 'Bebek Pak Ndut',
            'id_lokasi' => '1',
            'tempat_makan_seo' => 'bebek-pak-ndut',
            'foto' => 'post-images/UvU99oRYhfogNS0Yj2wFe2xsfIdFFYjmlfwfx4j9.png'
        ]);
        TempatMakan::create([
            'id' => '4',
            'nama_tempat' => 'Sate Bebek Cindelaras',
            'id_lokasi' => '1',
            'tempat_makan_seo' => 'sate-bebek-cindelaras',
            'foto' => 'post-images/2vn31QSGCtPlMrdm9bAWoY6Wr9U74iEMIh6ZTIdh.jpg'
        ]);
        TempatMakan::create([
            'id' => '5',
            'nama_tempat' => 'Ayam Rempah Pak Roto',
            'id_lokasi' => '8',
            'tempat_makan_seo' => 'ayam-rempah-pak-roto',
            'foto' => 'post-images/K1yWoArhNc2C441NcV9JaOV7942kbYR0PlJYvdul.png'
        ]);
        TempatMakan::create([
            'id' => '6',
            'nama_tempat' => 'Rujak Cingur Achmad Jais',
            'id_lokasi' => '5',
            'tempat_makan_seo' => 'rujak-cingur-achmad-jais',
            'foto' => 'post-images/U6rFSXzf1RAuG3vzvxO4Nu0bjwWy2dTFNrakAcAF.png'
        ]);
        TempatMakan::create([
            'id' => '7',
            'nama_tempat' => 'Leker Paimo',
            'id_lokasi' => '7',
            'tempat_makan_seo' => 'leker-paimo',
            'foto' => 'post-images/rBMj95FmbLpAVJ6sOJoQEAHkPiavPA41xoYLdwKI.png'
        ]);
        TempatMakan::create([
            'id' => '8',
            'nama_tempat' => 'Iga Bakar Si jangkung',
            'id_lokasi' => '2',
            'tempat_makan_seo' => 'iga-bakar-si-jangkung',
            'foto' => 'post-images/IrcDxamBptQ5ZqSAi5npHBxrVbDqeJNHsHgEo2sT.png'
        ]);
        TempatMakan::create([
            'id' => '9',
            'nama_tempat' => 'Haka Dimsum',
            'id_lokasi' => '3',
            'tempat_makan_seo' => 'haka-dimsum',
            'foto' => 'post-images/hRbBIyMXG3jphdSYOYKNN2qMVpOTWV1F4l5ps1XA.png'
        ]);
    }
}
