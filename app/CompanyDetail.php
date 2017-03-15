<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_details';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_name', 'contact_name', 'billing_address', 'business_type', 'city', 'state_province', 'country', 'zip_code', 'email', 'url', 'tel_no', 'mob_no', 'fax_no', 'other_details'];

    
}
