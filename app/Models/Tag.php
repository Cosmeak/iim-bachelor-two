<?php

namespace App\Models;

use App\Models\JobTag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
    ];

    
    public function jobTag() {
        return $this->hasMany(JobTag::class);
    }
}
