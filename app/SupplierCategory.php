<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'supplier_categories';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'sup_cat_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sup_cat_name', 'sup_cat_desc'];

    
}
