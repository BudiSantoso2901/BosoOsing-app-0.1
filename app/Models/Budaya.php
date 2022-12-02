<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;
    protected $table = 'budayas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'gambar',
        'namabudaya',
        'artikel',
    ];
}
