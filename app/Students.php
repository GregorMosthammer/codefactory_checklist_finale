<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
   protected $table = 'students';
   protected $fillable = array('firstname', 'lastname', 'phone', 'occupation', 'birthdate', 'street', 'street_number', 'plz', 'city', 'country', 'essay');
   

   public function checklist()
  {
      return $this->hasMany('App\checklist');
  }
}