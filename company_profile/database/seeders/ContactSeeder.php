<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'Apple',
            'description' => 'Iphone 13 pro max',
            'logo' => 'logo.png',
            'alamat' => 'Jl.Bandung Raya',
            'email' => 'Apple@support.co.id',
            'telepon' => '02135494663',
            'maps_embed' => 'maps.com',
            // data ini bukan crud jadi dibikin seeedernya langsung untuk memasukan kedalam my sqlnya
        ]);
    }
}
