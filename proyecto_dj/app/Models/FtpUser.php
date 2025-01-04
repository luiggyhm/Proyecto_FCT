<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FtpUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'alias',
        'password',
        'directorio_raiz',
        'tipo_user',
        'estado',
        'user_id',
    ];

    //relación 1:1 con el usuario FTP
    public function user()
    {
        return $this ->belongsTo(User::class);
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public static function createEmpty()
    {
        $usuario = new FtpUser();
        return $usuario;
    }
}
