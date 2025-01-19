<?php

namespace App\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use App\Models\ActionLog;
use Illuminate\Support\Facades\Event; // Adicione essa linha
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Outros eventos existentes
    ];

    public function boot()
    {
        Event::listen(Login::class, function ($event) {
            ActionLog::create([
                'user_id' => $event->user->id,
                'action' => 'login',
                'details' => 'User logged in.',
                'ip' => request()->ip(),
            ]);
        });

        Event::listen(Logout::class, function ($event) {
            ActionLog::create([
                'user_id' => $event->user->id,
                'action' => 'logout',
                'details' => 'User logged out.',
                'ip' => request()->ip(),
            ]);
        });
    }
}
