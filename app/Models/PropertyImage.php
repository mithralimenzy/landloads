<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    use HasFactory;
    protected $table ='property_images';
    protected $fillable =[
        'property_id',
        'category',
        'image_file_path'
    ];

    public function properties()
    {
        return $this->belongsTo(Property::class);
    }
}
