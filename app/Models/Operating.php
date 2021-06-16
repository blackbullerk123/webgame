<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operating extends Model
{
    use HasFactory;

    protected $table = 'operating_system';

    public function products()
    {
        return $this->hasMany(Product::class,'os_supported', 'id');
    }
}
