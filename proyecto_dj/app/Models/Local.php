<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_local',
        'descripcion',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}


}
