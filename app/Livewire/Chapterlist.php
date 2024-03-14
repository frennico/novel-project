<?php

namespace App\Livewire;

use App\Models\Chapter;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Chapterlist extends Component
{
    use WithFileUploads;

    public $chaptermodel;

    public function simpan()
    {
        // Mendapatkan pengguna yang sedang login
        $user = Auth::user();

        // Memeriksa apakah pengguna memiliki data novel yang terkait
        if ($user->datanovel) {
            // Jika ada, mendapatkan ID novel yang terkait dengan pengguna yang sedang login
            $datanovel_id = $user->datanovel->id;

            // Simpan bab baru dengan datanovel_id yang sesuai
            $simpan = new Chapter();
            $simpan->datanovel_id = $datanovel_id; // Menyertakan datanovel_id
            $simpan->chapter = $this->chaptermodel;
            $simpan->save();
        }

        // Clear input fields after saving
        $this->reset(['chaptermodel']);

        return redirect('/create');
    }

    public function render()
    {
        $chapter = Chapter::all();
        return view('livewire.chapterlist', compact('chapter'));
    }
}
