<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class People extends Model {

    protected $table    = 'socialAPI';
    public $primary_key = 'idsocialAPI';

//    protected $fillable = [
//        'idsocialAPI',
//        'nome',
//        'email',
//        'telefone'
//    ];
}
