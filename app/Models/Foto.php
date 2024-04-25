<?php

namespace App\Models;

use App\Models\CommentModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'foto';

   public function fotoComments(){
    return $this->hasMany(CommentModel::class,'id');
   }
}
