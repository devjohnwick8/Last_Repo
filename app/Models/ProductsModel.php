<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImageModel;
use App\Models\ProductSubModel;
use App\Models\ProductAutoPartModel;
use App\Models\ProductCarModel;

class ProductsModel extends Model
{
    protected $table= "products";
    use HasFactory;
    public function images_take1()
    {
        return $this->hasOne(ProductImageModel::class, 'product_id','id');
    }
    public function get_product_autoparts()
    {
        return $this->hasOne(ProductAutoPartModel::class, 'product_id','id');
    }

    public function get_product_cars()
    {
        return $this->hasOne(ProductCarModel::class, 'product_id','id');
    }

    public function get_technical()
    {
        return $this->hasOne(ProductTechnicalModel::class, 'product_id','id');
    }

    public function get_product_submodel()
    {
        return $this->hasOne(SubCategoriesModel::class, 'id', 'categories_id');
    }

}
