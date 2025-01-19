<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;

    // Atributos que podem ser atribuídos em massa
    protected $fillable = [
        'user_id',
        'action',
        'ip_address',
        'details',
    ];

    /**
     * Relacionamento com o usuário.
     *
     * Um log pertence a um usuário específico.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');  // O campo 'user_id' deve existir na tabela 'user_logs'
    }

    

    public function logsCount()
{
    return $this->hasMany(UserLog::class)->count();
}

}
