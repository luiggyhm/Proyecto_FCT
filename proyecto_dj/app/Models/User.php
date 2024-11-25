<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'telefono',
        'password',
        'tipo_acceso',

        //si es dj mostrar oculto
        'ciudad',

        //si es negocio mostrar
        'direccion',
        'aforo',
        
        'tipo_local',
        'suscripcion_id',

        //traer datos de negocio y que esten ocultos, que se muestren segun el checkbox de dj o negocio
    ];

    //relación 1:1 un usuario solo puede comprar una suscripcion
    public function suscripcion()
    {
        return $this->belongsTo(Suscripcion::class, 'suscripcion_id');
    }

    //relación 1:1 un usuario solo puede tener un usuario FTP
    public function ftpUser()
    {
        return $this ->hasOne(FtpUser::class);
    }

    //relación n:1 un usuario puede tener varios locales
    public function locales()
{
    return $this->hasMany(Local::class);
}


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
