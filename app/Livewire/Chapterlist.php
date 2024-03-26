<?php

namespace App\Livewire;

use App\Models\Chapter;
use App\Models\Datanovel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Chapterlist extends Component
{
    use WithFileUploads;

    public $datanovelId;
    public $chaptermodel;

    public function simpan()
    {
        $datanovel = Datanovel::findOrFail($this->datanovelId);

        if ($datanovel) {
            $simpan = new Chapter();
            $simpan->datanovel_id = $datanovel->id;
            $simpan->chapter = $this->chaptermodel;
            $simpan->save();

            $this->reset(['chaptermodel']);
        }

        return redirect('/create');
    }

    public function render()
    {
        $chapter = Chapter::all();
        return view('livewire.chapterlist', compact('chapter'));
    }
}
