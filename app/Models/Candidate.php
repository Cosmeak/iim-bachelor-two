<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
      'intagram',
      'facebook',
      'linkedin',
      'is_completed',
      'id_status',
      'id_user',
    ];

    public function user() {
      return $this->belongsTo(User::class);
    }

    public function status() {
      return $this->belongsTo(Statu::class);
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
