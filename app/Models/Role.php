<?php

namespace App\Models;

use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    protected $fillable = [
        'name',
        'guard_name',
        'updated_at',
        'created_at',
    ];
    public static function getRole($arrName = []){
        if(is_array($arrName)){
            $ids = Self::select('id')->whereIn('name',$arrName)->get()->pluck('id')->toArray();
        }else{
            $ids = Self::select('id')->where('name',$arrName)->get()->pluck('id')->toArray();
        }
        return $ids;
    }
}
