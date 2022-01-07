<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobTag extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tag_id',
        'job_id',
    ];

    protected $with = ['tag'];

    public function tag() {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    public function job() {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
