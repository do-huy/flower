<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'src',
    ];

    public function product()
    {
        return $this->belongsTo(Image::class);
    }

    public function getSrcAttribute()
    {
        @$src = $this->attributes['src'];
        return url("upload/product_images/$src");
    }

}
