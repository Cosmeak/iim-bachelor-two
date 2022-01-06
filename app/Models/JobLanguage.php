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
        'id_language',
        'id_job',
    ];

    public function language() {
        return $this->belongsTo(Language::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }
}
