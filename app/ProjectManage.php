<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectManage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'prj_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prj_code', 'prj_name', 'prj_desc', 'prj_start', 'prj_end', 'prj_budget'];

    
}
