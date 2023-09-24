<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    use HasFactory;

    protected $table = 'workorders'; // Nama tabel dalam database

    protected $fillable = [
        'no_wo',
        'alamat',
        'kategori_oa',
        'nama_pic',
        'telp_pic',
        'layanan_mbps',
        'segmen',
        'sid',
        'snont',
        'lan',
        'ip',
        'gw',
        'sm',
        // tambahkan kolom lainnya sesuai kebutuhan
    ];
    public function kategoriOA()
    {
        return $this->belongsTo(KategoriOA::class, 'kategori_oa');
    }

    public function segmen()
    {
        return $this->belongsTo(Segmen::class, 'segmen');
    }
}
