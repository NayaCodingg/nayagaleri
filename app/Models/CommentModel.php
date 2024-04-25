<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table ='comments';

    public function commentUser(){
        return $this->belongsTo(User::class,'userid');
       }
}
