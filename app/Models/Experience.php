<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
      'company_name',
      'start_date',
      'end_date',
      'job_name',
      'description',
      'id_sector',
      'id_candidate'
    ];
    

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }

    public function sector() {
      return $this->belongsTo(Sector::class);
    }

    

}
