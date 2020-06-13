<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lead;

class Reminder extends Model
{
    protected $guarded = [];

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

}
