<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Mapeie políticas aqui, se necessário
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Definir uma regra de autorização para visualização de logs
        Gate::define('view-logs', function ($user) {
            return $user->role === 'admin'; // Apenas usuários com a role 'admin' podem acessar
        });
    }
}
