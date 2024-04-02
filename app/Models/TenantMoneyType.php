<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantMoneyType extends Model
{
    use HasFactory;
    protected $table ='tenant_money_types';
    protected $fillable =[
        'tenant_money_type_name',
        'status'
    ];

    public function room()
    {
        return $this->hasMany(Room::class);
    }
}
