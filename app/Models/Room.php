<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table ='rooms';
    protected $fillable =[
        'room_name',
        'rent_amount',
        'rent_type',
        'guarantor',
        'room_availability',
        'tenant_money_type_id',
        'property_id'
    ];

    public function tenantMoneyType()
    {
        return $this->belongsTo(TenantMoneyType::class);
    }

    public function properties()
    {
        return $this->belongsTo(Property::class);
    }
}
