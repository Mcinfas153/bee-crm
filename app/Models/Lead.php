<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function leadStatus()
    {
        return $this->belongsTo(LeadStatus::class, 'status');
    }
}
