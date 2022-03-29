<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductsModel;

class ProductCartModel extends Model
{
    protected $table= "product_cars";
    use HasFactory;


    public function get_product()
    {
        return $this->hasOne(ProductsModel::class, 'id','product_id');
    }
}
