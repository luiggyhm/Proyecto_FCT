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
    ];

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


}
