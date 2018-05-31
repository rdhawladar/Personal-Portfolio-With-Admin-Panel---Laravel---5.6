<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'graphics';
    protected $fillable = [
        'name', 'email', 'subject', 'message'
    ];
    public $timestamps = true;
}
