<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    //
    protected $table = 'sumernote';
    protected $primaryKey = 'id';
    protected $fillable = ['title','slug','detail'];
    public $timestamps = true;
}
