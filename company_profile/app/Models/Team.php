<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'image'
    ];
    // agar data bisa masuk kedalam database
    // ini sama seperti yg ada di table migration
}
