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
      'id_candidate',
      'id_language'
    ];

    protected $with = ['language', 'candidate'];

    public function language() {
      return $this->belongsTo(Language::class);
    }

    public function candidate() {
      return $this->belongsTo(Candidate::class);
    }
}
