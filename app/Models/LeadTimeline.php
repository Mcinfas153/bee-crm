<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadTimeline extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'leads_timeline';

    public function timelineType()
    {
        return $this->belongsTo(LeadTimelineType::class, 'type');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
