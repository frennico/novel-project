<?php

namespace App\Livewire;

use App\Models\Datanovel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edithapusnovel extends Component
{
    use WithFileUploads;

    public $titlemodel;
    public $sinopsismodel;
    public $genremodel;
    public $imagemodel;
    public $selectedId;
    public $editId;
    public $genres = ['Mystery', 'Romance', 'Sci-Fi', 'Fantasy', 'Action', 'Adventure', 'Comedy', 'Drama', 'Horror', 'Thriller', 'Historical', 'Science', 'Non-fiction', 'Biography', 'Poetry', 'Western', 'Children', 'Classic', 'Crime', 'Suspense', 'Fantasy'];



    public function mount($id)
    {
        $datanovel = Datanovel::findOrFail($id);
        $this->selectedId = $id;
        $this->titlemodel = $datanovel->title;
        $this->sinopsismodel = $datanovel->sinopsis;
        $this->genremodel = $datanovel->genre;
    }

    public function edit($id)
    {
        $datanovel = Datanovel::findOrFail($id);
        $this->selectedId = $id;
        $this->titlemodel = $datanovel->title;
        $this->sinopsismodel = $datanovel->sinopsis;
        $this->genremodel = $datanovel->genre;
        $this->imagemodel = $datanovel->image;
    }

    public function update()
    {
        $datanovel = Datanovel::findOrFail($this->selectedId);

        $this->validate([
            'titlemodel' => 'required',
            'sinopsismodel' => 'required',
            'genremodel' => 'required',
            'imagemodel' => 'nullable|image|max:1024', // Validasi untuk gambar
        ]);

        // Jika ada gambar baru yang diunggah, simpan gambar yang baru
        if ($this->imagemodel) {
            $datanovel->image = $this->imagemodel->store('gambarnovel', 'public');
        }

        // Update data lainnya
        $datanovel->title = $this->titlemodel;
        $datanovel->sinopsis = $this->sinopsismodel;
        $datanovel->genre = $this->genremodel;
        $datanovel->save();

        return redirect('/create');
    }

    public function hapus($id)
    {
        Datanovel::findOrFail($id)->delete();
        $this->reset();
    }

    public function render()
    {
        $datanovel = Datanovel::all();
        return view('livewire.edithapusnovel', compact('datanovel'));
    }

    private function resetInputFields()
    {
        $this->reset(['titlemodel', 'sinopsismodel', 'genremodel', 'imagemodel']);
    }
}
