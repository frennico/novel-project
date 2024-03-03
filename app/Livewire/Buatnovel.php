<?php

namespace App\Livewire;

use App\Models\datanovel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Buatnovel extends Component
{
    use WithFileUploads;

    public $titlemodel;
    public $sinopsismodel;
    public $genremodel;
    public $imagemodel;

    public function simpan()
    {

        $namagambar = null;

        if ($this->imagemodel) {
            $namagambar = $this->imagemodel->store('gambarnovel', 'public');
        }

        $simpan = new datanovel();
        $simpan->title = $this->titlemodel;
        $simpan->sinopsis = $this->sinopsismodel;
        $simpan->genre = $this->genremodel;
        $simpan->image = $namagambar; // Assuming 'image' is the field name in the database
        $simpan->save();

        // Clear input fields after saving
        $this->reset(['titlemodel', 'sinopsismodel', 'genremodel', 'imagemodel']);
    }
    public function render()
    {
        $datanovel = datanovel::all();
        return view('livewire.buatnovel', compact('datanovel'));
    }
}
