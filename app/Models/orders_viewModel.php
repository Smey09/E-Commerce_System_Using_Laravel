<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders_viewModel extends Model
{
    use HasFactory;
    public $table = "tbl_product";
    public $primaryKey = "pro_id";
    public $fillable = ["pro_name", "pro_type", "pro_price","pro_images"];
    public $timestamps = false;
}
