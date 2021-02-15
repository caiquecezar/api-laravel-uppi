<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    protected $fillable = [
        'product_id',
        'purchase_value',
        'purchase_provider',
    ];

    public function product () {
        return $this->belongsTo('Product');
    }
}
