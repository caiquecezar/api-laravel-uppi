<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'catalog_id',
        'prod_name',
        'prod_unit',
    ];
    
    public function purchases () {
        return $this->hasMany('Purchase');
    }
    public function list () {
        return $this->belongsTo('Catalog');
    }
}
