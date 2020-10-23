<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    protected $table = "komen";
    protected $fillable = ["comment", "id_user"];
}
