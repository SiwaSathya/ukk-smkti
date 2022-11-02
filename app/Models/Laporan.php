<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['id', 'pengajuan_id','kendala', 'kesimpulan','file'];

 
   public function pengajuan(){
       return $this->belongsTo('App\Models\Pengajuan', 'pengajuan_id');
   }
}
