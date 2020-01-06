<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allProductMember extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'allproductmember';
}
