@extends("layouts.base")

@section("pageTitle", "Aggiungi fumetto")

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/createAndEdit.css')}}">
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
                        <input required type="text" class="form-control" id="thumb" name="thumb" value="">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="title" class="form-label" >Titolo fumetto</label>
                        <input require type="text" class="form-control" id="title" name="title" value="">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="price" class="form-label" >Prezzo</label>
                        <input require type="number" step=".01" class="form-control" id="price" name="price" value="">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="series" class="form-label">Serie</label>
                        <input require type="text" class="form-control" id="series" name="series" value="">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="sale_date" class="form-label" >Data di vendita</label>
                        <input require type="text" class="form-control" id="sale_date" name="sale_date" value="">
                    </div>
        
                    <div class="mb-3 w-50 fw-bold">
                        <label for="type" class="form-label" >Tipo</label>
                        <input require type="text" class="form-control" id="type" name="type" value="">
                    </div>
        
                    <label for="description" class="form-label fw-bold fer" >Descizione</label>
                    <div class="form-floating">
                        <textarea require class="form-control w-50" placeholder="Descrizione" id="description" name="description"></textarea>
                    </div>
        
                    <button type="submit" class="btn btn-primary mt-5">Invia</button>
        
                </form>
            </div>
        </div>
            



        
    </div>      
@endsection