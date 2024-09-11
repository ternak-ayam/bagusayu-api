<?php

namespace App\Models;

use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HandleUpload;

    protected $fillable = [
        'name',
        'price',
        'unit',
        'photo'
    ];
}
