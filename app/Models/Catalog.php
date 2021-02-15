<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';
    
    protected $fillable = [
        'catalog_name', 'user_id',
    ];

    public function products () {
        return $this->hasMany('Product');
    }
    
    public function user () {
        return $this->belongsTo('User');
    }
}
