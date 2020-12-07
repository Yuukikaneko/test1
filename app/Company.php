<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = array('company_id');
    protected $table = 'company';

    public static $rules = array(
        'company_id' => 'required',
        'company' => 'required',
        'password' => 'required|alpha-num',
    );
}
