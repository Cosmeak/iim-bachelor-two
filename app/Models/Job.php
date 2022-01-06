<?php

namespace App\Models;

use App\Models\JobTag;
use App\Models\Sector;
use App\Models\Company;
use App\Models\Location;
use App\Models\WorkingMode;
use App\Models\ContractType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
        'id_location',
        'id_working_mode',
        'id_contract_mode',
        'id_company',
        'id_sector',
        'description',
        'salary',
        'archive_date',
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }
    
    public function workingMode() {
        return $this->belongsTo(WorkingMode::class);
    }
    
    public function contractType() {
        return $this->belongsTo(ContractType::class);
    }
    
    public function company() {
        return $this->belongsTo(Company::class);
    }
    
    public function sector() {
        return $this->belongsTo(Sector::class);
    }

    public function jobTag() {
        return $this->hasMany(JobTag::class);
    }
}
