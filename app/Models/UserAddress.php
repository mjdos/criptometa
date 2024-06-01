<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'estado_id',
        'cidade_id',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cep'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estado()
    {
        return $this->belongsTo(State::class);
    }

    public function cidade()
    {
        return $this->belongsTo(City::class);
    }
}
