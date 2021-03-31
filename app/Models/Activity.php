<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->belongsTo(UserActivity::class, 'id', 'activity_id');
    }
}
