<?php

// namespace App;

// use App\User;
// use Illuminate\Database\Eloquent\Model;

// class post extends Model
// {
//     protected $table = 'posts';
//     protected $guarded = [];

//     public function user(){
//     	return $this->belongsTo(User::class);
//     }
// }
namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';
  protected $guarded = [];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
