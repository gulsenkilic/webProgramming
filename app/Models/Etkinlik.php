<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etkinlik extends Model
{
    use HasFactory;
    protected $table = 'etkinlikler';
    protected $guarded=[];
    protected $primaryKey = 'id';
}
