<?php

namespace App\Livewire;

use App\Models\Chapter;
use App\Models\Datanovel;
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

    public function prev($id)
    {
        $chapter = Chapter::find($id);
        $prevChapter = Chapter::where('id', '<', $chapter->id)->orderBy('id', 'desc')->first();

        if ($prevChapter) {
            return redirect()->route('Bacaan', $prevChapter->id);
        } else {
            // Handle jika tidak ada bab sebelumnya
        }
    }

    public function next($id)
    {
        $chapter = Chapter::find($id);
        $nextChapter = Chapter::where('id', '>', $chapter->id)->orderBy('id', 'asc')->first();

        if ($nextChapter) {
            return redirect()->route('Bacaan', $nextChapter->id);
        } else {
            // Handle jika tidak ada bab selanjutnya
        }
    }


    public function render()
    {
        $chapter = Chapter::all();
        return view('livewire.chapterlist', compact('chapter'));
    }
}
