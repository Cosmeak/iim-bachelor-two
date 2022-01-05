<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = [
      'label'
    ];

    public function experience() {
      return $this->hasMany(Experience::class);
    }

    public function candidate() {
      return $this->hasMany(CandidateSector::class);
    }

    public function job() {
      return $this->hasMany(Job::class);
    }

    public function company() {
      return $this->hasMany(Company::class);
    }
}
