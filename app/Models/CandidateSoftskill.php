<?php

namespace App\Models;

use App\Models\Candidate;
use App\Models\Softskill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CandidateSoftskill extends Model
{
    use HasFactory;

    protected $fillable = [
      'softskill_id',
      'candidate_id'
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function softskill() {
      return $this->belongsTo(Softskill::class, 'softskill_id');
    }
}
