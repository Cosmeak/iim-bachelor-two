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
      'id_status',
      'id_user',
      'id_location'
    ];

    protected $with = ['user', 'status'];

    public function user() {
      return $this->belongsTo(User::class, 'id_user');
    }

    public function status() {
      return $this->belongsTo(Statu::class, 'id_status');
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
