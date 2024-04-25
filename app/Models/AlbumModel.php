<?php

namespace App\Models;

use App\Models\Foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlbumModel extends Model
{
    use HasFactory;
    protected $table = 'albums';
    protected $guarded = ['id'];
    public function albumFoto(){
        return $this->hasMany(Foto::class,'id',);
    }
}
