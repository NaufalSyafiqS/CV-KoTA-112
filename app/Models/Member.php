<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // By default, Eloquent uses the table name based on the model name (Member -> members)
    // It also assumes the primary key is 'id'
    // You can add fillable or guarded properties if needed for mass assignment,
    // but for a simple data retrieval, it's not strictly necessary here.
}