<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class views_product_detailsModel extends Model
{
    use HasFactory;
    public $table = "tbl_views_products_details";
    public $primaryKey = "pro_id";
    public $fillable = ["pro_name", "pro_detail", "pro_discount"];
    public $timestamps = false;
}
