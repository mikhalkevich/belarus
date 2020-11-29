<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    protected $fillable = [
        'name',
        'date_rod',
        'who_is',
        'how_is',
        'picture1',
        'user_id',
        'status',
        'counts'
    ];
    public function catalogs(){
        return $this->belongsTo('App\Catalog','date_rod');
    }
    public function statuses(){
        return $this->belongsTo('status');
    }
}
