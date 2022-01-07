<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'label',
    ];

    public function location() {
        return $this->hasMany(Location::class);
    }
}
