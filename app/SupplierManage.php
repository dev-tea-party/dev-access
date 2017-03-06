<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierManage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suppliers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'sup_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sup_name', 'sup_cat_id', 'sup_vat_num', 'sup_op_bal', 'sup_addr_1', 'sup_addr_2', 'sup_contact_name', 'sup_contact_email', 'sup_tel_num', 'sup_mobile_num', 'sup_fax_num', 'sup_website', 'sup_bank_acct_holder', 'sup_bank_acct_num', 'sup_bank_acct_type', 'sup_bank_name', 'sup_bank_code'];

    
}
