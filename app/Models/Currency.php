<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{   
    use Uuids;
    use HasFactory;
    public $timestamps = false;    // don't add updated_at / created_at
    protected $fillable = ['name','currency_code', 'exchange_rate']; // allow Mass Assignment
}
