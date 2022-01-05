<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateSector extends Model
{
    use HasFactory;

    protected $fillable = [
      'id_candidate',
      'id_sector'
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function sector() {
      return $this->belongsTo(Sector::class);
    }
}
