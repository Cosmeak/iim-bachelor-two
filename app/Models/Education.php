<?php

namespace App\Models;

use App\Models\Degree;
use App\Models\Diploma;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
      'label',
      'start_date',
      'end_date',
      'id_degree',
      'id_candidate',
      'id_diploma'
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function degree() {
      return $this->belongsTo(Degree::class);
    }

    public function diploma() {
      return $this->belongsTo(Diploma::class);
    }
}
