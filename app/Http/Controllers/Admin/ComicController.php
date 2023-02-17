<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    public function getValidate( Request $request) {
        return $request->validate(
            [
                // array associativo
                //dd($request);
                'title'=> 'required|min:3|max:60',
                'description'=> 'required|min:10|max:200',
                'thumb'=> 'required',
                'price'=> 'required',
                'series'=> 'required|min:3|max:60',
                'sale_date'=> 'required',
                'type'=> 'required|min:3|max:30',
    
            ],
    
            [
                'title.required' => 'Per favore, inserire il titolo',
                'description.min' => 'Descrizione troppo corta, inserire almeno 10 caratteri',
                'description.max' => 'Superati i caratteri masssimi per la descrizione(200)',
                'thumb' => 'Inserire un immagine',
                'price'=> 'prezzo mancante',
                'series.required' => 'Indicare la serie',
                'series.min' => 'Serie è troppo corta, inserire almeno 3 caratteri',
                'serie.max' => 'Superati i caratteri masssimi per la serie(60)',
                'sale_date.required' => 'Data di uscita non inserita',
                'type.required' => 'Indicare la categoria',
                'type.min' => 'Type è troppo corto, inserire almeno 3 caratteri',
                'type.max' => 'Superati i caratteri masssimi per Type(30)',
    
            ]

            );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Uso il metodo per richiamare la validation
        $data = $this->getValidate($request);
        
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();


        //$newComic = new Comic();
        //$newComic->title = $data['title'];
        //$newComic->description = $data['description'];
        //$newComic->thumb = $data['thumb'];
        //$newComic->price = $data['price'];
        //$newComic->series = $data['series'];
        //$newComic->sale_date = $data['sale_date'];
        //$newComic->type = $data['type'];
        //$newComic->save();

        return redirect()->route('comics.show', $newComic->id)->with('message', "$newComic->title has been created")->with('alert-type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id); 
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //Uso il metodo per richiamare la validation
        $data = $this->getValidate($request);

        $comic = Comic::findOrFail($id); 
        $comic->update($data);

        //ritorno sulla pagina dello show
        return redirect()->route('comics.show', $comic->id)->with('message', "$comic->title has been edited")->with('alert-type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id); 
        $comic->delete();
        //dd($comic);

        return redirect()->route('comics.index')->with('message', "$comic->title has been deleted")->with('alert-type', 'danger');
    }
}
