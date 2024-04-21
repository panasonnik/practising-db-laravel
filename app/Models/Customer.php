<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_id',
        'name',
        'company'
    ];
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function items() {
        return $this->belongsToMany(Item::class);
    }
}
