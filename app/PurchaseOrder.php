<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'purchase_orders';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'po_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['po_date', 'po_num', 'po_sup_id', 'po_in_budget', 'po_vat', 'po_prep_user_id', 'po_app_user_id', 'po_status'];

    
}
