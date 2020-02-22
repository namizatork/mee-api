<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_language', 'language_id', 'user_id');
    }
}
