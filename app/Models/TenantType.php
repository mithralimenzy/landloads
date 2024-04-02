<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantType extends Model
{
    use HasFactory;
    protected $table ='tenant_types';
    protected $fillable =[
        'tenant_name',
        'status'
    ];

    public function property()
    {
        return $this->hasMany(Property::class);
    }

}
