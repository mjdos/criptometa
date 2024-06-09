<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
        
    protected $table = 'projetos';

    protected $fillable = [
        'titulo', 
        'descricao', 
        'meta', 
        'fundos_arrecadados',
        'user_id',
        'imagem'
    ];

    public function submetas()
    {
        return $this->hasMany(Submeta::class, 'projeto_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
