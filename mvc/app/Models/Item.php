<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';

    protected $fillable = [
        'tipo',
        'valor'
    ];

    public function usuari()
    {
        return $this->belongsTo(Usuari::class, 'usuari_id');
    }
}
