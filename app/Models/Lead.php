<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $guarded = ['ip_address','created_by', 'created_at'];

    public function creator()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function assignUser()
    {
        return $this->belongsTo(User::class,'assign_to');
    }

    public function leadStatus()
    {
        return $this->belongsTo(LeadStatus::class, 'status');
    }

    public function timeline()
    {
        return $this->hasMany(LeadTimeline::class, 'lead_id');
    }

    public function getCountryAttribute($value)
    {
        if(!isset($value)){
            return '-';
        }

        return $value;
    }

    public function getContactTimeAttribute($value)
    {
        if(!isset($value)){
            return '-';
        }

        return $value;
    }

    public function getIpAddressAttribute($value)
    {
        if(!isset($value)){
            return '-';
        }

        return $value;
    }
}
