<?php

namespace App\Models;

use App\Models\Sector;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
      'company_name',
      'start_date',
      'end_date',
      'job_name',
      'description',

      'sector_id',
      'candidate_id'
    ];
    

    public function candidate() {
      return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function sector() {
      return $this->belongsTo(Sector::class, 'sector_id');
    }

    

}
