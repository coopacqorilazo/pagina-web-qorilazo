<?php 

namespace App;

trait UserTrait {

    public function roles(){
        return  $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function havePermission($permission){
        
        foreach ($this->roles as $role ) {
            
            if ($role['full-access'] =='yes' ) {
                return true;
            }
            foreach ($role->permissions as $perm) {
                
                if ($perm->slug == $permission ) {
                    return true;
                }   
            }
        }        
        return false;
    }
}