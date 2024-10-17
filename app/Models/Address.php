<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = [
    ];

    public function custumer()
    {
        return $this->belongsTo(User::class);
    }
}
