<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanySize extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'label',
    ];

    public function company() {
        return $this->hasMany(Company::class);
    }
}
