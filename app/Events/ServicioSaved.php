<?php

namespace App\Events;

use App\Models\Servicio;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class ServicioSaved
{
    use Dispatchable, SerializesModels;

    public $servicio;

    public function __construct(Servicio $servicio)
    {
        $this->servicio = $servicio;
    }

    public function broadcastOn()
    {
        return new Channel('channel-name');
    }
}