<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['titulo', 'descricao'];

    // Relacionamento: Uma enquete pode ter várias opções
    public function opcoes()
    {
        return $this->hasMany(Opcao::class);
    }
}
