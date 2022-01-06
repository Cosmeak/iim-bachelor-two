<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CandidateToJob extends Model
{
    use HasFactory;

    protected $fillable = [
      'candidate_id',
      'job_id'
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function job() {
      return $this->belongsTo(Job::class, 'job_id');
    }
}
