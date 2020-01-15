<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductIndex extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'productindex';
}
