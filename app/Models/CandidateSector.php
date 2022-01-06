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
