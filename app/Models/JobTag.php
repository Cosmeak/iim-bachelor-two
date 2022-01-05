<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
