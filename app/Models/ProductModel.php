<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public $table = "tbl_product";
    public $primaryKey = "pro_id";
    public $fillable = ["pro_title", "pro_type", "pro_price"];
    public $timestamps = false;
}
