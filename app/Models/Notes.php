<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'active'
    ];

    // protected $guarded = [];

    static function todas_las_notas(){
        return Notes::where('active', true)->get();
    }

    static function nota_por_id($id){
        return Notes::where('id', $id)
            ->where('active', true)
            ->firstOrFail();
    }
}
