<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investimentos extends Model
{
    use HasFactory;

    protected $table = 'investimentos';

    protected $fillable = [
        'valor',
        'investidor_id',
        'projeto_id',
    ];

    public function investidor()
    {
        return $this->belongsTo(User::class, 'investidor_id');
    }


}
