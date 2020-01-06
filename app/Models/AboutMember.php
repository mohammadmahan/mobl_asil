<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMember extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'aboutmembers';
}
