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
        'description',
        'salary',
        'archive_date',

        'location_id',
        'working_mode_id',
        'contract_mode_id',
        'company_id',
        'sector_id',
    ];

    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }
    
    public function workingMode() {
        return $this->belongsTo(WorkingMode::class, 'working_mode_id');
    }
    
    public function contractType() {
        return $this->belongsTo(ContractType::class, 'contract_type_id');
    }
    
    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }
    
    public function sector() {
        return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function jobTag() {
        return $this->hasMany(JobTag::class);
    }
}
