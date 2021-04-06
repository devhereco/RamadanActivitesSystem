<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;
    protected $table = "user_activities";
    protected $fillable=[
        'activity_id',
        'messuser_idage',
        'status',
    ]; 

    public function activity()
    {
        return $this->belongsTo('App\Models\Activity'::class, 'activity_id', 'id');
    }

    public function user() {
        return $this->hasOne('App\Models\User'::class, 'id', 'user_id');
    }
}
