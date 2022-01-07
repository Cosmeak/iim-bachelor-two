<?php

namespace App\Models;

use App\Models\User;
use App\Models\Statu;
use App\Models\Location;
use App\Models\Education;
use App\Models\Experience;
use App\Models\CandidateToJob;
use App\Models\CandidateSector;
use App\Models\CandidateLanguage;
use App\Models\CandidateSoftskill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'birth_date',
      'phone_number',
      'profile_picture',
      'cv',
      'website',
      'instagram',
      'facebook',
      'linkedin',
      'is_completed',

      'status_id',
      'user_id',
      'location_id'
    ];

    // protected $with = ['user', 'status', 'location', 'softskill', 'education', 'language', 'sector', 'experience', 'job'];

    public function user() {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function status() {
      return $this->belongsTo(Status::class, 'status_id');
    }

    public function location() {
      return $this->belongsTo(Location::class);
    }

    public function softskill() {
      return $this->hasMany(CandidateSoftskill::class);
    }

    public function education() {
      return $this->hasMany(Education::class);
    }

    public function language() {
      return $this->hasMany(CandidateLanguage::class);
    }

    public function sector() {
      return $this->hasMany(CandidateSector::class);
    }

    public function experience() {
      return $this->hasMany(Experience::class);
    }

    public function job() {
      return $this->hasMany(CandidateToJob::class);
    }
}
