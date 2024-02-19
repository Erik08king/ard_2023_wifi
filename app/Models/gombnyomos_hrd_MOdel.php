<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gombnyomos_hrd_MOdel extends Model
{
    use HasFactory;
    public $table = "gombnyomos_hrd_ek";
    public $primaryKey = "ny_id";
    public $timestamps = false;
    public $guarded = [];
}
