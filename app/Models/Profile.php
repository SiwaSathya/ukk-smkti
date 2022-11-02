<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['id', 'user_id', 'nama','tempat_lahir', 'tanggal_lahir', 'no_hp', 'alamat', 'instansi', ];

 
  
}