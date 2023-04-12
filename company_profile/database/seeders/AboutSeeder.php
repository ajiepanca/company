<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul' => 'Apple',
            'subjudul' => 'Iphone 13 pro max',
            'deskripsi_1' => 'logo.png',
            'deskripsi_2' => 'Lorem ipsum wdhkawd',
            'kelebihan_1' => 'Lorem ipsum wdhkawd',
            'kelebihan_2' => 'Lorem ipsum wdhkawd',
            'kelebihan_3' => 'Lorem ipsum wdhkawd',
            'kelebihan_4' => 'Lorem ipsum wdhkawd',
           
            // data ini bukan crud jadi dibikin seeedernya langsung untuk memasukan kedalam my sqlnya
        ]);
    }
}
