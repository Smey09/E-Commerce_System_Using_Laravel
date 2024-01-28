<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorModel extends Model
{
    use HasFactory;

    public $table ="tbl_major";
    public $primaryKey="mid";
}
