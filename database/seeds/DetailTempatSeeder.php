<?php

use Illuminate\Database\Seeder;
use App\DetailTempat;

class DetailTempatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailTempat::create([
            'id' => '1',
            'id_kota' => '1',
            'id_tempat' => '1',
            'no_telp' => '0895610769630',
            'waktu_operasional' => '18.00-23.00 (Mon-Sun)',
            'alamat' => 'PERUM BCK BLOK D.11 NO.05',
            'link_maps' => 'https://goo.gl/maps/X4vv1bPWjncg3S5M6',
            'menu' => 'post-images/3F5iDmQrKe4zze3WLonjoWbL8P1SAlNAHWHnO660.jpg'
        ]);

        DetailTempat::create([
            'id' => '2',
            'id_kota' => '1',
            'id_tempat' => '4',
            'no_telp' => '0818392401842',
            'waktu_operasional' => '16-00-21.00 (Mon-Sun)',
            'alamat' => 'Perumnas Cilegon',
            'link_maps' => 'https://goo.gl/maps/BVkF2t1QDFjgJZ5j6',
            'menu' => 'post-images/6luy7XoDvliFDB5ndOnccSEjf2OcxpXXUDoTCNgM.png'
        ]);

        DetailTempat::create([
            'id' => '3',
            'id_kota' => '8',
            'id_tempat' => '5',
            'no_telp' => '087808011262',
            'waktu_operasional' => '07.00-00.00 (sun-mon)',
            'alamat' => 'Jl. Pogung Rejo Jl. Pogung Kidul No.5, RT.20/RW.51, Pogung Kidul, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284',
            'link_maps' => 'https://goo.gl/maps/heWHYqJMPdU57aP2A',
            'menu' => 'post-images/LPSsBuNT9lgiVqc0LKAkHpprTQD1OkQHjJGynt0L.png'
        ]);

        DetailTempat::create([
            'id' => '4',
            'id_kota' => '5',
            'id_tempat' => '6',
            'no_telp' => '0315328443',
            'waktu_operasional' => '12.00-17.00 (Sun-Mon, except friday)',
            'alamat' => 'Jl. Achmad Jais No.40, Peneleh, Kec. Genteng, Kota SBY, Jawa Timur 60274',
            'link_maps' => 'https://goo.gl/maps/3z34KMzRHSrMEHXJ6',
            'menu' => 'post-images/3en5JR0hXp2ZHqpyBZVC20FaIU7xwpqcNvrgaAMn.png'
        ]);

        DetailTempat::create([
            'id' => '5',
            'id_kota' => '7',
            'id_tempat' => '7',
            'no_telp' => '08156595412',
            'waktu_operasional' => '10.00-17.00 (Mon-Sat)',
            'alamat' => 'Jl. Karang Anyar No.37, Brumbungan, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50135',
            'link_maps' => 'https://goo.gl/maps/ezetXcQDSfZobNfHA',
            'menu' => 'post-images/Fj3JAucIUdIkWDD9MisjBSHQqzzO863GRpW06ISr.png'
        ]);

        DetailTempat::create([
            'id' => '7',
            'id_kota' => '2',
            'id_tempat' => '8',
            'no_telp' => '08112205513',
            'waktu_operasional' => '16.00-22.00 (Sun-Mon)',
            'alamat' => 'Jl. Cipaganti No.75G, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
            'link_maps' => 'https://goo.gl/maps/46PtAK9E5BMaDcoY7',
            'menu' => 'post-images/TaZnqJESLMN2aJj9gRZw3lyndEvlIfpP78EO6f79.png'
        ]);

        DetailTempat::create([
            'id' => '8',
            'id_kota' => '3',
            'id_tempat' => '9',
            'no_telp' => '081119050004',
            'waktu_operasional' => '24 Hours (Mon-Sun)',
            'alamat' => 'Jl. Sultan Hasanuddin Dalam No.3, RT.3/RW.1, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160',
            'link_maps' => 'https://goo.gl/maps/Tqm68M21p61Yf122A',
            'menu' => 'post-images/N83urLIDI62ARh8HjO4iPVSJrF4ozyLzUIaoP88A.png'
        ]);

        DetailTempat::create([
            'id' => '9',
            'id_kota' => '1',
            'id_tempat' => '3',
            'no_telp' => '02547819063',
            'waktu_operasional' => '10.00-22.00 (Mon-Sun)',
            'alamat' => 'samping home stay, Jln PCI ruko No 4, Kedaleman, Kec. Cibeber, Kota Cilegon, Banten 42422',
            'link_maps' => 'https://g.page/pak-ndut-cilegon2-pci?share',
            'menu' => 'post-images/M0twJDU1VLnINiqs6A8AuM6msoZGCQYU77bVQ5Wk.png'
        ]);
    }
}
