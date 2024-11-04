<?php

namespace App\Models\Traits;

use App\Models\Report;

trait Reportable
{
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function report($userId, $reason, $description = null)
    {
        return $this->reports()->create([
            'reporter_id' => $userId,
            'reason' => $reason,
            'description' => $description,
            'status' => 'pending'
        ]);
    }

    public function isReportedBy($userId)
    {
        return $this->reports()
            ->where('reporter_id', $userId)
            ->where('status', '!=', 'dismissed')
            ->exists();
    }

    public function getActiveReportsCount()
    {
        return $this->reports()
            ->whereIn('status', ['pending', 'reviewing'])
            ->count();
    }
}
