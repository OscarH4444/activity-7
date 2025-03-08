<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function roboticsKit() {
        return $this->belongsTo(RoboticsKit::class);
    }
}
