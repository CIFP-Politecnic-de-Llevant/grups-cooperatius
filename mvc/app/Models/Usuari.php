<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    protected $table = 'usuari';

    public $timestamps = false;

    protected $fillable = [
        'nom',
        'cognoms',
        'curs_id',
        'items'
    ];

    public function curs()
    {
        return $this->belongsTo(Curs::class, 'curs');
    }

    public function amics()
    {
        return $this->belongsToMany(Usuari::class, 'usuari_relacions', 'id', 'amic_id')->wherePivot('relacion_tipo','amic');
    }

    public function enemics()
    {
        return $this->belongsToMany(Usuari::class, 'usuari_relacions', 'id', 'enemic_id')->wherePivot('relacion_tipo','enemic');
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function amistats()
    {
        return $this->belongsToMany(Usuari::class, 'usuari_relacions', 'id', 'amistat_id')->wherePivot('relacion_tipo','amistat');
    }

    public function enemistats()
    {
        return $this->belongsToMany(Usuari::class, 'usuari_relacions', 'id', 'enemistat_id')->wherePivot('relacion_tipo','enemistat');
    }

    public function amistatsR()
    {
        return $this->amistats()->with('amistats.amistats');
    }

    public function enemistatsR()
    {
        return $this->enemistats()->with('enemistats.enemistats');
    }
}
