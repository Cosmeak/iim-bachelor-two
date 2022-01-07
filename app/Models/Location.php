<?php

namespace App\Models;

use App\Models\Job;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'zipcode',

        'country_id',
        'city_id',
    ];

    protected $with = ['city', 'country'];

    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function job() {
        return $this->hasOne(Job::class);
    }

    public function candidate() {
      return $this->hasOne(Candidate::class);
    }

    public function company() {
      return $this->hasOne(Company::class);
    }
}
