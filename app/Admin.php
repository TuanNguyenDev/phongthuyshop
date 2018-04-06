<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\UserRole;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','dia_chi','sdt','trang_thai'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /*
    check current user has Mod_role
     @return boolean
     author TuanNguyen
     3/4/2018 - create new
     */
    public function checkMod(){
        $listRole = UserRole::where('id_user', $this->id)->get();
        $flag = false;
        for ($i=0; $i < count($listRole) ; $i++) { 
            if($listRole[$i]->id_role >= ROLE_MOD){
                $flag = true;
                break;
            }
        }
        return $flag;
    }
}
