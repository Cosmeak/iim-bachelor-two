<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateToJob extends Model
{
    use HasFactory;

    protected $fillable = [
      'id_candidate',
      'id_job'
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function job() {
      return $this->belongsTo(Job::class);
    }
}
