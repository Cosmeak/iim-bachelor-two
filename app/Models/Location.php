<?php

namespace App\Models;

use App\Models\Job;
use App\Models\City;
use App\Models\Country;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_country',
        'id_city',
        'address',
        'zipcode',
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function job() {
        return $this->hasOne(Job::class);
    }

    public function candidate() {
      return $this->hasOne(Candidate::class);
  }
}
