<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser; 
use Filament\Panel;

// class User extends Authenticatable
class User extends Authenticatable implements FilamentUser
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



    /* ======================================================
     | RELATIONS
     ====================================================== */

    public function levels()
    {
        return $this->belongsToMany(Level::class)
            ->withPivot([
                'score',
                'quiz_passed',
                'completed_at',
            ])
            ->withTimestamps();
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class)
            ->withPivot('completed_at');
            
    }

    /* ======================================================
     | ACCESS & COMPLETION
     ====================================================== */

    // Level dianggap selesai HANYA jika quiz lulus
    public function hasCompletedLevel(Level $level): bool
    {
        return $this->levels->contains(function ($userLevel) use ($level) {
            return $userLevel->id === $level->id && $userLevel->pivot->quiz_passed;
        });
    }

    public function hasCompletedLevelOrder(int $order): bool
    {
        return $this->levels()
            ->where('order', $order)
            ->wherePivot('quiz_passed', true)
            ->exists();
    }


    // Logic tunggal untuk lock level
    // public function canAccessLevel(Level $level): bool
    // {
    //     // Level pertama selalu terbuka
    //     if ($level->order === 1) {
    //         return true;
    //     }

    //     // Ambil level sebelumnya
    //     $previousLevelOrder = $level->order - 1;

    //     return $this->levels()
    //         ->where('order', $previousLevelOrder)
    //         ->wherePivot('quiz_passed', true)
    //         ->exists();
    // }
public function canAccessLevel(Level $level): bool
{
    // Level 1 selalu terbuka
    if ($level->order === 1) {
        return true;
    }

    $previousLevel = Level::where('order', $level->order - 1)->first();

    if (!$previousLevel) {
        return false;
    }

    // Ambil pivot user-level sebelumnya
    $pivot = $this->levels()
        ->where('level_id', $previousLevel->id)
        ->first()?->pivot;

    // BELUM PERNAH MENGERJAKAN level sebelumnya
    if (!$pivot) {
        return false;
    }

    // HARUS 100%
    return $this->levelProgress($previousLevel) === 100;
}




    /* ======================================================
     | MATERIAL PROGRESS
     ====================================================== */

    public function hasCompletedMaterial(Material $material): bool
    {
        return $this->materials()
            ->where('material_id', $material->id)
            ->wherePivotNotNull('completed_at')
            ->exists();
    }

    public function completedMaterialCount(Level $level): int
    {
        return $this->materials()
            ->whereHas('level', fn ($q) => $q->where('id', $level->id))
            ->wherePivotNotNull('completed_at')
            ->count();
    }

    public function hasCompletedAllMaterials(Level $level): bool
    {
        $count = $this->materials->filter(function ($material) use ($level) {
            return $material->level_id == $level->id && $material->pivot->completed_at;
        })->count();
        
        return $count >= $level->materials->count();
    }

    /* ======================================================
     | PROGRESS & SCORE
     ====================================================== */

    /**
     * Progress level:
     * - 50% jika semua materi selesai
     * - +50% jika quiz lulus
     */
    public function levelProgress(Level $level): int
    {
        // Gunakan collection memory (eager load)
        $materialsDone = $this->materials->filter(function ($m) use ($level) {
            return $m->level_id == $level->id && $m->pivot->completed_at;
        })->count();

        $totalMaterials = $level->materials->count();

        $materialProgress = $totalMaterials > 0 && $materialsDone === $totalMaterials
            ? 50
            : 0;

        $userLevel = $this->levels->firstWhere('id', $level->id);
        $pivot = $userLevel ? $userLevel->pivot : null;

        $quizProgress = $pivot && $pivot->quiz_passed ? 50 : 0;

        return $materialProgress + $quizProgress;
    }

    public function hasPerfectQuiz(Level $level): bool
    {
        return $this->levels()
            ->where('level_id', $level->id)
            ->wherePivot('quiz_passed', true)
            ->wherePivot('score', 100)
            ->exists();
    }

    public function progressPercentage(): int
    {
        $totalLevels = Level::count();

        if ($totalLevels === 0) {
            return 0;
        }

        $totalProgress = 0;

        foreach (Level::all() as $level) {
            $totalProgress += $this->levelProgress($level);
        }

        // Normalisasi ke 0–100%
        return (int) round($totalProgress / ($totalLevels * 100) * 100);
    }


    // Total score asli dari pivot level
    public function totalScore(): int
    {
        return (int) $this->levels()->sum('score');
    }

        /* ======================================================
     | FILAMENT PANEL ACCESS
     ====================================================== */

    public function canAccessPanel(Panel $panel): bool
    {
    // ADMIN PERMANEN BERDASARKAN EMAIL
    if ($panel->getId() === 'admin') {
    return $this->email === '220631100102@student.trunojoyo.ac.id';
    }


    return true;
    }

    public function isAdmin(): bool
    {
        return $this->is_admin === true;
    }
}
