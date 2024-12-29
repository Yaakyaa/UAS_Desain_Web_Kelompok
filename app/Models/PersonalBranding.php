<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalBranding extends Model
{
    protected $fillable = [ 'name', 'nim', 'image', 'prodi', 'alamat', ];
}
