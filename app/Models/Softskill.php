<?php

namespace App\Models;

use App\Models\CandidateSoftskill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Softskill extends Model
{
    use HasFactory;

    protected $fillable = [
      'label'
    ];

    public function softskill() {
      return $this->hasMany(CandidateSoftskill::class);
    }
}
