<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopSlider extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'topslider';
}
