<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    use HasFactory;
    protected $table = 'kelases';
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'nama_kelas',
        'kompetensi_keahlian',
    ];
}
