<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $table = 'moduls';
    protected $fillable = ['numero', 'nombre', 'cicle_id', 'modalidad','grau'];
}
