<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
USE App\Models\User;
class Level extends Model
{
    protected $fillable = ['title', 'description', 'order'];

    
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot(['score', 'quiz_passed', 'completed_at'])
            ->withTimestamps();
    }


    public function materials()
    {
        return $this->hasMany(Material::class)->orderBy('order');
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    
    public function isCompletedBy(?User $user): bool
    {
        if (!$user) {
            return false;
        }

        return $user->levels()
            ->where('level_id', $this->id)
            ->whereNotNull('completed_at')
            ->exists();
    }



}
