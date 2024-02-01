<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class views_macbookModel extends Model
{
    use HasFactory;
    public $table = "Pro_macbook";
    public $primaryKey = "Pro_macbook_id";
    public $fillable = ["Pro_macbook_name","Pro_macbook_price", "Pro_macbook_detail", "Pro_macbook_year"];
    public $timestamps = false;
}
