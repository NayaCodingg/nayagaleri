<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $guarded = ['FotoID'];

    public function komentar()
    {
        return $this->belongsToMany(Komentar::class);
    }
    public function likefoto()
    {
        return $this->hasMany(LikeFoto::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
