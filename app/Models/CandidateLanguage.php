<?php

namespace App\Models;

use App\Models\Language;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CandidateLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
      'candidate_id',
      'language_id'
    ];

    protected $with = ['language'];

    public function language() {
      return $this->belongsTo(Language::class, 'language_id');
    }

    public function candidate() {
      return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
