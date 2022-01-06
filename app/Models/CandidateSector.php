<?php

namespace App\Models;

use App\Models\Sector;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CandidateSector extends Model
{
    use HasFactory;

    protected $fillable = [
      'candidate_id',
      'sector_id'
    ];

    protected $with = ['candidate', 'sector'];

    public function candidate() {
      return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function sector() {
      return $this->belongsTo(Sector::class, 'sector_id');
    }
}
