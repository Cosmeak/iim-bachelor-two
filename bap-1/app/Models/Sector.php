<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Company;
use App\Models\Experience;
use App\Models\CandidateSector;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
