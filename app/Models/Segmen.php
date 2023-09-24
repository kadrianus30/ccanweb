<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segmen extends Model
{
    protected $table = 'segmens'; // Nama tabel dalam database

    protected $fillable = [
        'name', // Attribut-attribut lain yang dapat diisi
    ];

    // Jika Anda memiliki relasi dengan model WorkOrder, Anda dapat mendefinisikan relasinya di sini.
    public function workOrders()
    {
        return $this->hasMany(WorkOrder::class, 'segmen');
    }
}
