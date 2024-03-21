<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use App\Models\datanovel;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function hapus($id)
    {

        Datanovel::findOrFail($id)->delete();
        return back();
    }


    public function editnovelsee($idnovel)
    {
        $datanovel = datanovel::find($idnovel);
        return view('editnovel', [
            'datanovel => $datanovel'
        ]);
    }

    public function Tampilan($id)
    {
        $Tampilan = Datanovel::find($id);
        return view('Tampilan')->with([
        'Tampilan' => $Tampilan
        ]);
    }

    public function Bacaan($id)
    {
        // Ambil bab berdasarkan id
        $chapter = Chapter::findOrFail($id);

        // Ambil data novel berdasarkan id
        $Datanovel = Datanovel::find($id);

        // Tambahan logika untuk menampilkan judul dari Datanovel yang sesuai
        $title = '';
        if ($Datanovel) {
            $title = $Datanovel->title;
        }

        // Kembalikan view dengan memberikan judul yang sesuai
        return view('Bacaan', compact('chapter', 'title'));
    }


}
