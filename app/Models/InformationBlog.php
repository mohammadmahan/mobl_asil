<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationBlog extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'InformationBlog';
}
