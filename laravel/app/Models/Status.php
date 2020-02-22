<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_status');
    }

    public function test()
    {
        dd('ok');
    }
}
