<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['customer_name', 'email', 'contact_number', 'event_type', 'message', 'package_id'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
