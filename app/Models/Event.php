<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items' => 'array',
        'date' => 'datetime'
    ];

    protected $dates = ['date'];

    public function user(){
        return $this.belongTo('App\Models\User');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }



    protected $guarded = [];

}
