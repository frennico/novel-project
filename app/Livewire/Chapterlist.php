<?php

namespace App\Livewire;

use App\Models\Chapter;
use App\Models\datanovel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Chapterlist extends Component
{
    use WithFileUploads;

    public $datanovelId;
    public $chaptermodel;

    public function simpan()
    {
        // Assuming you want to get the id of the latest Datanovel record, you can use Eloquent's latest() method
        $datanovel = Datanovel::latest()->first();

        // Check if $datanovel is not null before trying to access its id
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
