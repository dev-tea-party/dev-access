<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountsManage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'account_balances';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'acc_bal_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['acc_bal_code', 'acc_bal_name', 'acc_bal_current', 'acc_bal_type', 'acc_bal_desc'];

    
}
