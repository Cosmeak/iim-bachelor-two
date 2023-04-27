<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobLanguage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'language_id',
        'job_id',
    ];
    
    protected $with = ['language'];

    public function language() {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function job() {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
