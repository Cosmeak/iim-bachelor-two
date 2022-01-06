<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CandidateLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
      'id_candidate',
      'id_language'
    ];

    public function language() {
      return $this->belongsTo(Language::class);
    }
}
