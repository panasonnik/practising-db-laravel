<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
    public function customers() {
        return $this->belongsToMany(Customer::class);
    }
}
