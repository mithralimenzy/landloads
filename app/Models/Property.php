<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table ='properties';
    protected $fillable =[
        'property_area',
        'rental_type',
        'tenant_type_id',
        'renting_min_term',
        'renting_max_term',
        'bill_include'
    ];

    public function tenantType()
    {
        return $this->belongsTo(TenantType::class);
    }

    public function propertyAddresses()
    {
        return $this->hasOne(PropertyAddress::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function commands()
    {
        return $this->hasMany(Command::class);
    }
}
