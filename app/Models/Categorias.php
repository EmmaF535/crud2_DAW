<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'porNombre'//, 'content', 'active'
    ];

    static function todas_las_categorias(){
        return Categorias::where('active', true)->get();
    }

    static function categoria_por_id(){
        return Categories::where('id', $id)
            ->where('active', true)
            ->firstOrFail();
    }
}
