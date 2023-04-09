<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class conference extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name','description','date','participant number','country','address'];
}
