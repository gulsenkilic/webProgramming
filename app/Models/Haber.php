<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haber extends Model
{
    use HasFactory;
    protected $table = 'haberler';
    protected $guarded=[];
    protected $primaryKey = 'id';
}
