<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesModel extends Model
{
    use HasFactory;
    public $table = "tbl_images";
    public $primaryKey = "images_id";
    public $fillable = ["images_title", "images_type", "images_price"];
    public $timestamps = false;
}
