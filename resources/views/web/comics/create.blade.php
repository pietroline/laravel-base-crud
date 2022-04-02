@extends("layouts.base")

@section("pageTitle", "Aggiungi Fumetto")

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
@endsection
        
@section('content')
    <div class="container" style="height:100vw">


        <div class="row py-5">
            <div class="col">
                <h1>Compila i dati per il fumetto da aggiungere</h1>
            </div>
        </div>
       

        {{-- il form contiene dei valori di value o src per semplicità in questa fase di debug, in futuro è opportuno rimuoverli --}}
        <div class="row">
            <div class="col">
                <form method="POST" action="{{route('comics.store')}}">

                    {{-- meccanismo di sicurezza--}}
                    @csrf
                    
                    <div class="mb-3 w-50 fw-bold">
                        <label for="thumb" class="form-label" >Indirizzo immagine</label>
                        <input required type="text" class="form-control" id="thumb" name="thumb" value="https://picsum.photos/200/300">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="title" class="form-label" >Titolo fumetto</label>
                        <input type="text" class="form-control" id="title" name="title" value="Le avventure del nuovo fumetto">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="price" class="form-label" >Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" value="9.99">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="action comics">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="sale_date" class="form-label" >Data di vendita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="2022-04-10">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="type" class="form-label" >Tipo</label>
                        <input type="text" class="form-control" id="type" name="type" value="comic book">
                    </div>
        
                    <label for="description" class="form-label fw-bold fer" >Descizione</label>
                    <div class="form-floating">
                        <textarea class="form-control w-50" placeholder="Descrizione" id="description" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis cum iste perferendis. Harum architecto, quod velit autem fugiat id inventore amet alias sed ipsum consequuntur iste tempora quia, facere placeat!</textarea>
                    </div>
        
                    <button type="submit" class="btn btn-primary mt-5">Invia</button>
        
                </form>
            </div>
        </div>
            



        
    </div>      
@endsection