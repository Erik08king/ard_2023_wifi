<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legminosegek extends Model
{
    use HasFactory;
    public $table = "levegominosegek";
    public $primaryKey = "l_id";
    public $timestamps = false;
    public $guarded = [];
}
