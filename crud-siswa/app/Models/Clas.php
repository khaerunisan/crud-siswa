<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
      protected $tabe = "clases";

     protected $guarde = [];

     public function users (){
      return $this->hasMany(User::class, 'clas_id');
}

}
