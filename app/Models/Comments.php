<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'content', 'rate'];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
    public function unser()
    {
        return $this->belongsToMany(User::class);
    }
}
