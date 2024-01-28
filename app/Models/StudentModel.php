<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    public $table = "tbl_student";
    public $primaryKey = "sId";
    public $fillable = ["sName", "tel", "gender"];
    public $timestamps = false;
}