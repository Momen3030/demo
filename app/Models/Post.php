<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=['title','body','user_id'];
//    protected $guarded=['abc'];   //not use

//relation between Post (posts) and User (users)
//post has one and only user
//one user wite many posts
//user have many posts
//post  writen by one user

  public function user(){
      return $this->belongsTo(User::class);
  }

}
