<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MassagesManagement extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'contactmembers';
}
