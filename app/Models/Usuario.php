<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];
    protected $primaryKey = 'usuario_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->usuario_senha;
    }



}
