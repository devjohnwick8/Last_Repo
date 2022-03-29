<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImageModel;

class ProductTechnicalModel extends Model
{
    protected $table= "technicals";
    use HasFactory;
    // public function images_take1()
    // {
    //     return $this->hasOne(ProductImageModel::class, 'product_id','id');
    // }
    // public function get_product_cars()
    // {
    //     return $this->hasOne(ProductCarModel::class, 'p_id','id');
    // }

}
