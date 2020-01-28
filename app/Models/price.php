<?php

namespace App;

use App\Models\categories;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'price';
    public function categories(){
        return $this->belongsTo(categories::class);
    }
    public function allproduct(){
        return $this->hasMany(allProductMember::class);
    }
}
