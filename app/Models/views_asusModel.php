<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class views_asusModel extends Model
{
    use HasFactory;
    public $table = "Pro_asus";
    public $primaryKey = "Pro_asus_id";
    public $fillable = ["Pro_asus_name","Pro_asus_price", "Pro_asus_detail", "Pro_asus_year"];
    public $timestamps = false;
}
