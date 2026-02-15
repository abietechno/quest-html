<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;


class MaterialController extends Controller
{
    /**
     * Menampilkan materi berdasarkan level
     */
    public function show(Level $level, Material $material)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        if ($material->level_id !== $level->id) {
            abort(404);
        }

        $user = Auth::user();

        // 🔒 Lock level (kecuali level pertama)
        if ($level->order > 1 && !$user->hasCompletedLevelOrder($level->order - 1)) {
            return redirect('/level')->with('error', '🔒 Selesaikan level sebelumnya');
        }

        // ✅ AUTO COMPLETE materi SAAT DIBUKA
        $user->materials()->syncWithoutDetaching([
            $material->id => ['completed_at' => now()]
        ]);

        $materials = $level->materials()
            ->orderBy('order')
            ->get();

        $currentIndex = $materials->search(
            fn ($m) => $m->id === $material->id
        );

        $currentSlide = $currentIndex + 1; // karena index mulai dari 0
        $totalSlides  = $materials->count();

        $prev = $materials[$currentIndex - 1] ?? null;
        $next = $materials[$currentIndex + 1] ?? null;

        return view('material.show', compact(
            'level',
            'material',
            'prev',
            'next',
            'currentSlide',
            'totalSlides'
        ));

    }


    public function complete(Material $material)
    {
        $user = Auth::user();
        $level = $material->level;

        // pastikan materi terakhir disimpan
        $user->materials()->syncWithoutDetaching([
            $material->id => ['completed_at' => now()]
        ]);

        // cek apakah SEMUA materi level ini sudah selesai
        $totalMaterials = $level->materials()->count();

        $completedMaterials = $user->materials()
            ->where('level_id', $level->id)
            ->count();

        if ($totalMaterials === $completedMaterials) {
            // tandai level selesai (quiz terbuka)
            $user->levels()->syncWithoutDetaching([
                $level->id => [
                    'completed_at' => now()
                ]
            ]);
        }

        return redirect("/level/{$level->id}")
            ->with('success', '🎉 Semua materi selesai! Quiz terbuka.');
    }



  

}
