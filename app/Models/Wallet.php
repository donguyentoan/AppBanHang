<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = ['user_id', 'address', 'name', 'balance'];
    use HasFactory;
}
