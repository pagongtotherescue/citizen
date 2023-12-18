<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['property_name', 'property_price', 'property_location', 'property_image', 'property_description', 'property_type', 'property_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}