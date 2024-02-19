<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tavolsagok extends Model
{
    use HasFactory;
    public $table = "tavolsag";
    public $primaryKey = "t_id";
    public $timestamps = false;
    public $guarded = [];
}
