<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
      'label'
    ];

    public function candidate() {
      return $this->hasMany(Candidatelanguage::class);
    }
    public function job() {
      return $this->hasMany(JobLanguage::class);
    }
}
