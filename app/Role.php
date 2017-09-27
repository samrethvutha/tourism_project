<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = [
    'name', 'display_name'
];
    public function permissions(){
      return $this->belongsToMany('App\Role', 'permission_role', 'role_id', 'user_id');
   }
   public function users(){
    return $this->belongsToMany('App\User');
 }
}
