<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryTransactions extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventory_transactions';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'inv_trans_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['inv_trans_item_code', 'inv_trans_mat_id', 'inv_trans_qty', 'inv_trans_unit', 'inv_trans_unit_cost','inv_trans_action', 'inv_trans_remarks'];    
}
