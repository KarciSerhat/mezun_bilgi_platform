<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gonderi extends Model
{
    use HasFactory;
    protected $table = 'gonderiler';
    public function getUser(){
        //foreign ile gönderiyi paylaşan useri getiriyor
        return $this->hasOne('App\Models\User','id','user_id');

    }
}
