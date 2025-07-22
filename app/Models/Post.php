<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
      use HasFactory;

    protected $table = 'post';

    protected $fillable = [
        'titulo',
        'contenido',
        'estado',
        'url_imagen',
        'fecha_publicacion',
    ];

      /**
     * Filtrar por estado exacto
     */
    public function scopeFilterByEstado(Builder $query, $estado)
    {
        return $query->where('estado', $estado);
    }
    
    public function scopeFilterByKeyword(Builder $query, $keyword)
{
    return $query->where(function ($q) use ($keyword) {
        $q->where('titulo', 'like', "%{$keyword}%")
          ->orWhere('contenido', 'like', "%{$keyword}%");
    });
}



    protected $casts = [
    'fecha_publicacion' => 'date',
];

}
