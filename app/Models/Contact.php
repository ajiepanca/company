<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';
    //  fungsi ini ditulis agar data seeder pada table migration bisa dijalankan dengan perintah db:seed
    // atau gampangnya codingan ini ditulis agar table migration dapat dimasukan ke my sql

    protected $fillable = [
        'name', 'description', 'logo', 'alamat', 'lemail', 'telepon', 'maps_embed'
    ];
     // agar data bisa masuk kedalam database edit
}
