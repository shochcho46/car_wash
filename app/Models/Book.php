<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "id", "name", "mobile", "customer_id", "package_id",
        "contributor_id", "price", "time_slot", "status", "booking_date",
    ];

}
