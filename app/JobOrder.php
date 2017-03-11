<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'job_orders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'jo_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['jo_code', 'jo_desc', 'jo_cost', 'prj_id'];

    /**
     * Get the Project Code that owns the Job Order.
     */
    public function project()
    {
        return $this->belongsTo('App\ProjectManage','prj_id','prj_id');
    }
}
