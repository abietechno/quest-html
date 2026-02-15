<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['level_id', 'content', 'example_code', 'title',
'order','example_code'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('completed_at');
    }

}
