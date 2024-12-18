<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcao extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['descricao', 'enquete_id'];

    // Relacionamento: Uma opção pertence a uma enquete
    public function enquete()
    {
        return $this->belongsTo(Enquete::class);
    }
}
