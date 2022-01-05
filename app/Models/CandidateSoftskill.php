<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
