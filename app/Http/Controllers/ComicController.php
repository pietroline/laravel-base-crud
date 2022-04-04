<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("web.comics.index", compact("comics"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("web.comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                "thumb" => "required | url",
                "title" => "required | min:5",
                "price" => "required | numeric | min: 0",
                "series" => "required | min:5",
                "sale_date" => "required | date",
                "type" => "required | min:5",
                "description" => "required | min:20",
            ]
        );

        $data = $request->all();
    
        $comic = new Comic();
        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->thumb = $data["thumb"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->type = $data["type"];

        // sintassi alternativa, bisogna andare nel model (Comic) 
        //e aggiungere quelli che sono i campi fillable (per questioni di sicurezza)
        $comic->fill($data);

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id])->with('status', 'Fumetto caricato correttamente!');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       

        $comic = Comic::find($id);

        if($comic){

            return view("web.comics.show", compact("comic"));

        }else{
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // questa volta ho usato la dependency injection,
        // per una sintassi alternativa che non faccia uso della Dependency injection
        // vedi il metodo show 
        return view("web.comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate(
            [
                "thumb" => "required | url",
                "title" => "required | min:5",
                "price" => "required | numeric | min: 0",
                "series" => "required | min:5",
                "sale_date" => "required | date",
                "type" => "required | min:5",
                "description" => "required | min:20",
            ]
        );


        // con dependency injection 
        $data = $request->all();
        $comic->update($data);

        return redirect()->route("comics.show", $comic->id)->with('status', 'Fumetto aggiornato correttamente!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // con dependency injection 
        $comic->delete();
        
        return redirect()->route("comics.index")->with('status', 'Fumetto eliminato correttamente');;
    }
}
