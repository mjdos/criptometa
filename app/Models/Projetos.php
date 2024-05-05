<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    use HasFactory;

    protected $table = 'projetos';

    protected $fillable = [
        'autor_id',
        'nome',
        'valor',
        'descricao',
        'meta_1',
        'meta_2',
        'meta_3',
        'meta_4',
        'meta_5',
        'imagem',
        'carteira',
    ];

    public function autor()
    {
        return $this->belongsTo(User::class, 'autor_id');
    }
}
