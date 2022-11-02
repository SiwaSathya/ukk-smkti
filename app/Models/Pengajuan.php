<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

    protected $fillable = ['nama', 'tujuan_keberangkatan', 'tanggal_keberangkatan', 'tanggal_kembali', 'tujuan'];

    public function laporan(){
    	return $this->hasOne('App\Models\Laporan');
    }
}
