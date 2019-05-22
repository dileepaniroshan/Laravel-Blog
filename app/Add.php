<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    //Table Name
    protected $table = 'adds';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
