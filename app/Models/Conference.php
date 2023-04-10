<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name','description','date','participant_number','country','address'];
}
