<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yerleske extends Model
{
    use HasFactory;
    protected $table = 'yerleskeler';
    protected $guarded=[];
    protected $primaryKey = 'id';
}
