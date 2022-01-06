<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContractType extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
    ];

    public function job() {
        return $this->hasMany(Job::class);
    }
}
