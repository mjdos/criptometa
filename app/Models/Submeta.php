<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submeta extends Model
{
    use HasFactory;

    protected $table = 'submetas';

    protected $fillable = [
        'projeto_id', 
        'nome', 
        'percentual', 
        'valor', 
        'fundos_arrecadados'
    ];

    public function projeto()
    {
        return $this->belongsTo(Project::class, 'projeto_id');
    }
}
