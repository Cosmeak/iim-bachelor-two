<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use App\Models\Sector;
use App\Models\Location;
use App\Models\CompanySize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'id_location',
        'id_company_size',
        'id_sector',
        'name',
        'description',
        'phone_number',
        'email',
        'id_user',
        'is_completed',
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function companySize() {
        return $this->belongsTo(CompanySize::class);
    }

    public function sector() {
        return $this->belongsTo(Sector::class);
    }

    public function job() {
        return $this->hasMany(Job::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
