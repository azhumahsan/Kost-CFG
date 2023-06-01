<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booked extends Model
{
    protected $table = 'booking';
    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo('App\Models\Kamar', 'id_kamar');
    }
}
