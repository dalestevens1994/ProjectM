<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function client() {
        return $this->belongsTo('App\Client');
    }

//    public function users() {
//        return $this->hasMany('App\link_project_user');
//    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function tasks() {
        return $this->hasMany('App\Task');
    }

}
