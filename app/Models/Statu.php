<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statu extends Model
{
    use HasFactory;

    protected $fillable = [
      'label'
    ];

    public function candidate() {
      return $this->hasMany(Candidate::class);
    }
}
