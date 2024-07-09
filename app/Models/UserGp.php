<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGp extends Model
{
    use HasFactory;
    protected $fillable = ['telephone','nom_gp','telephone','address','user_id','email'];
}
