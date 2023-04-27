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
    
    public $table = 'educations';

    protected $fillable = [
      'label',
      'description',
      'start_date',
      'end_date',

      'candidate_id',
      'diploma_id'
    ];

    protected $with = ['diploma'];

    public function candidate() {
      return $this->belongsTo(Candidate::class, 'candidate_id');
    }
    
    public function diploma() {
      return $this->belongsTo(Diploma::class, 'diploma_id');
    }
}
