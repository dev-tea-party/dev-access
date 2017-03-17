<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'materials';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'mat_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mat_item_code', 'mat_item_qty', 'jo_id'];

    
}
