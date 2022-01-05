<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
