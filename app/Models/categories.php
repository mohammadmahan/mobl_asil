<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'categories';
}
