<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAddress extends Model
{
    use HasFactory;
    protected $table ='property_addresses';
    protected $fillable =[
        'property_id',
        'place_id',
        'place_name',
        'cities',
        'region',
        'geocode'
    ];

    public function properties()
    {
        return $this->belongsTo(Property::class);
    }
}
