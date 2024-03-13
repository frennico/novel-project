<?php

namespace App\Livewire;

use App\Models\chapter;
use Livewire\Component;
use Livewire\WithFileUploads;

class Chapterlist extends Component
{
    use WithFileUploads;

    public $chaptermodel;

    public function simpan()
    {
        $simpan = new Chapter();
        $simpan->chapter = $this->chaptermodel;
        $simpan->save();

        // Clear input fields after saving
        $this->reset(['chaptermodel']);

        return redirect('/create');
    }

    public function render()
    {
        $chapter = chapter::all();
        return view('livewire.chapterlist', compact('chapter'));
    }
}
