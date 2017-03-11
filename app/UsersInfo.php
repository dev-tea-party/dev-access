<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersInfo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users_info';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'users_info_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'middlename', 'email', 'tel_loc', 'tel_num', 'mobile_loc', 'mobile_num', 'user_id'];
}
