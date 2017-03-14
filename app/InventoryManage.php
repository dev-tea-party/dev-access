<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryManage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventory_items';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'inv_item_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['po_date', 'po_num', 'po_sup_id', 'inv_item_qty', 'inv_item_code', 'inv_item_desc', 'inv_item_unit', 'inv_item_unit_cost', 'inv_item_condition'];

    
}
