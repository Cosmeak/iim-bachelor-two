<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
      'label'
    ];

    public function candidate() {
      return $this->hasMany(Candidate::class);
    }
}
