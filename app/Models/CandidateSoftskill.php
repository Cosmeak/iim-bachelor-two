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
      'id_softskill',
      'id_candidate'
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function softskill() {
      return $this->belongsTo(Softskill::class);
    }
}
