<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedbackReply extends Model
{
    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
}
