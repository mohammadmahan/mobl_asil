<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'price';
}
