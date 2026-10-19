<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
    'user_id',
    'about_me',
    'education',
    'skills',
    'projects',
    'work_experience',
    'social_links',
    'template_choice',
];

public function user()
{
    return $this->belongsTo(User::class);
}
}