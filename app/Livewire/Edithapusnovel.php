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


    public function edit($id)
    {
        $datanovel = Datanovel::findOrFail($id);
        $this->editId = $id;
        $this->titlemodel = $datanovel->title;
        $this->sinopsismodel = $datanovel->sinopsis;
        $this->genremodel = $datanovel->genre;
        // Uncomment the following line if you want to display the image being edited
        // $this->imagemodel = $datanovel->image;

        // Optionally, you can add a confirmation message or perform other actions before redirecting
        // For example:
        // session()->flash('message', 'Editing novel with ID ' . $id);

        // Redirect to the update page with the selected ID
        return redirect()->route('update', ['id' => $id]);
    }

    public function mount($id)
    {
        $datanovel = Datanovel::findOrFail($id);
        $this->selectedId = $id;
        $this->titlemodel = $datanovel->title;
        $this->sinopsismodel = $datanovel->sinopsis;
        $this->genremodel = $datanovel->genre;
        // Jika ingin menampilkan gambar yang sedang diedit
        // Anda dapat menambahkan kode berikut:
        // $this->imagemodel = $datanovel->image;
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

        return redirect()->route('create');
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
