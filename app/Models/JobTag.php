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
        'id_tag',
        'id_job',
    ];

    public function tag() {
        return $this->belongsTo(Tag::class);
    }

    public function job() {
        return $this->belongsTo(Job::class);
    }
}
