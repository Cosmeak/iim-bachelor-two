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

      'degree_id',
      'candidate_id',
      'diploma_id'
    ];

    public function candidate() {
      return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function degree() {
      return $this->belongsTo(Degree::class, 'degree_id');
    }

    public function diploma() {
      return $this->belongsTo(Diploma::class, 'diploma_id');
    }
}
