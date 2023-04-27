<?php

namespace App\Models;

use App\Models\Education;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diploma extends Model
{
    use HasFactory;

    protected $fillable = [
      'label'
    ];

    public function education() {
      return $this->hasMany(Education::class);
    }
}
