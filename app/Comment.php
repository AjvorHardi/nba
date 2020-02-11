<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function teams() {
        return $this->belongsTo(Team::class);
    }
}
