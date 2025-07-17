<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequestForm extends Model
{
    //
    protected $fillable = [
        'brand_id',
        'issue_id',
        'brand_name',
        'model',
        'name',
        'email',
        'phone',
        'description',
    ];
}
