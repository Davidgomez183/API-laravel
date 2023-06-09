<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    use HasFactory;
    protected $table = 'cicles';
    protected $fillable = ['nom', 'durada', 'horari', 'modalidad','grau'];
    public function moduls() {
        return $this->hasMany(Modul::class, 'cicle_id', 'id');
    }
}
