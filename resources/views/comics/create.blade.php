@extends("layouts.base")

@section("pageTitle", "Aggiungi Fumetto")
        
@section('content')
    <div class="container">


        {{-- sistemare codice e  css della pagina --}}





        <h1>Compila i dati per il fumetto da aggiungere</h1>


        {{-- il form contiene dei valori di value o src per semplicità in questa fase di debug, in futuro è opportuno rimuoverli --}}
        <form method="POST" action="{{route('comics.store')}}">

            {{-- meccanismo di sicurezza--}}
            @csrf
            
            <div class="mb-3">
                <label for="src" class="form-label" >Indirizzo immagine</label>
                <input required type="text" class="form-control" id="src" name="src" value="https://www.newComics.it">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >Titolo fumetto</label>
                <input type="text" class="form-control" id="title" name="title" value="Le avventure del nuovo fumetto">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label" >Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="9.99">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="action comics">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label" >Data di vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="2022-04-10">
            </div>

            <div class="mb-3">
                <label for="cooking_time" class="form-label" >Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="comic book">
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis cum iste perferendis. Harum architecto, quod velit autem fugiat id inventore amet alias sed ipsum consequuntur iste tempora quia, facere placeat!</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
            



        
    </div>      
@endsection