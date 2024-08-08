<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = strtolower($value);
    }

    public function setSubCategoryAttribute($value)
    {
        $this->attributes['subcategory'] = strtolower($value);
    }
}
