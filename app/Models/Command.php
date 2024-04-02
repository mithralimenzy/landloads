<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    protected $table ='commands';
    protected $fillable =[
        'property_id',
        'user_id',
        'command'
    ];

    public function properties()
    {
        return $this->belongsTo(Property::class);
    }
}
