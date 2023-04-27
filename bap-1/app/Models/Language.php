<?php

namespace App\Models;

use App\Models\JobLanguage;
use App\Models\CandidateLanguage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
      'label'
    ];

    public function candidate() {
      return $this->hasMany(CandidateLanguage::class);
    }
    public function job() {
      return $this->hasMany(JobLanguage::class);
    }
}
