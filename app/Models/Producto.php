<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','descripcion', 'precio','categoria_id','imagen'];

    public function categoria():BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
