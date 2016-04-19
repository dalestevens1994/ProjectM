<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class link_project_user extends Model
{

    protected $table = 'link_project_user';

    public function getUser()
    {
        return $this->belongsTo('App\User');
    }

    public function getProject()
    {
        return $this->belongsTo('App\Project');
    }

}
