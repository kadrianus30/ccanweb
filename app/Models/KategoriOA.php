<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriOA extends Model
{
    protected $table = 'kategorys'; // Nama tabel dalam database

    protected $fillable = [
        'name', // Attribut-atribut lain yang dapat diisi
    ];

    // Jika Anda memiliki relasi dengan model WorkOrder, Anda dapat mendefinisikan relasinya di sini.
    public function workOrders()
    {
        return $this->hasMany(WorkOrder::class, 'kategori_oa');
    }
}
