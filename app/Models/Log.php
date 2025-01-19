<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    // Se você não tem uma tabela chamada logs com a convenção padrão
    protected $table = 'logs';

    // Defina os campos que você deseja preencher em massa (caso necessário)
    protected $fillable = ['user_id', 'action', 'created_at'];

    // Relacionamento com o modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
