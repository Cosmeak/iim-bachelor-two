<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
