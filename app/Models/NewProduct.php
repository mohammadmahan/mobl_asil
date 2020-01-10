<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'newproduct';
}
