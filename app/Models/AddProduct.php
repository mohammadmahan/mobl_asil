<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'contactmembers';
}
