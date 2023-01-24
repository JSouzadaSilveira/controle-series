<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index() {
        
        // Modo mais verboso
        //$series = DB::select('SELECT name FROM series');
        // return view('listar-series', [
        //     'series' => $series
        // ]);
        
        //Select all
        //$series = Serie::all();

        //Ordem alfabetica
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }

    public function store(Request $request) {
        
        //Não interessante
        //DB::insert('INSERT INTO series (name) VALUES ( ? )', [ $nomeSerie ]);

        $nomeSerie = $request->input('name');
        $serie = new Serie();
        $serie->name = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
