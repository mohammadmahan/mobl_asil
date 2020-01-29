<?php

namespace App;

use App\Models\categories;
use Illuminate\Database\Eloquent\Model;

class allProductMember extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'allproductmember';
    public function price(){
        return $this->belongsTo(price::class);
    }
    public function category(){
        return $this->belongsTo(categories::class);
    }
}
