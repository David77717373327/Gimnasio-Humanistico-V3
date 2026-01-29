<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  // ✔ Correcto
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'grado_id',
        'document'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function grado()
    {
        return $this->belongsTo(Grado::class);
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class, 'profesor_id');
    }
}
