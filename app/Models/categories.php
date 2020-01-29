<?php

namespace App\Models;

use App\allProductMember;
use App\price;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'categories';
    public function price(){
        return $this->hasMany(price::class);
    }
    public function allproduct(){
        return $this->hasMany(allProductMember::class);
    }
}
