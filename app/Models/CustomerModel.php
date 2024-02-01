<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    public $table = "tbl_customer";
    public $primaryKey = "Cus_Id";
    public $fillable = ["Cus_Name","Cus_Tel","Cus_Gender","Cus_Order_model", "Cus_Order_price", "Cus_Order_date"];

    public $timestamps = false;
}
