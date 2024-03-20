<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsData = Comic::All();
        return view('comics.index', compact('comicsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|numeric|min:0',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
        ],

        [
            'title.required' => 'Il titolo è obbligatorio.',
            'description.required' => 'La descrizione è obbligatoria.',
            'thumb.required' => "L'immagine è obbligatoria.",
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.min' => 'Il prezzo deve essere maggiore o uguale a :min.',
            'series.required' => 'La serie è obbligatoria.',
            'sale_date.required' => 'La data di produzione è obbligatoria.',
            'sale_date.date' => 'La data di produzione non è valida.',
            'type.required' => 'La tipologia è obbligatoria.',

        ]);


        $addComic = $request->all();

        $newComic = new Comic();

        $newComic->fill($addComic);

        $newComic->save();

        return redirect()->route('comicsData.show', ['comicsDatum' => $newComic->id]);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fumettoAggiornato = $request->all();

        $comic = Comic::find($id);

        $comic->update($fumettoAggiornato);

        return redirect()->route('comicsData.index', ['comic' => '$comic ->id']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comicsData.index');

    }
}
