<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
 
    protected $table='film';
    protected $primaryKey='id';
    protected $guarded=[];
}
