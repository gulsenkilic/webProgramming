<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkademikKadro extends Model
{
    use HasFactory;
    protected $table = 'akademik_kadro';
    protected $guarded=[];
    protected $primaryKey = 'id';
}
