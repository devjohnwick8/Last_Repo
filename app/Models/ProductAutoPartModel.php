<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductsModel;

class ProductAutoPartModel extends Model
{
    protected $table= "product_autoparts";
    use HasFactory;
    
    
    public function get_product()
    {
        return $this->hasOne(ProductsModel::class, 'prodid','id');
    }
}
