@extends("layouts.base")

@section("pageTitle", "Fumetti disponibili")
        
@section('content')
    <div class="container">


        {{-- sistemare codice e  css della pagina --}}

       <div class="d-flex justify-content-center my-5">
            <a class="btn btn-primary text-white" href="{{route('comics.create')}}" role="button">Aggiungi Fumetto</a>
       </div>

        <div class="row">



                
            @foreach ($comics as $key => $comic)
 
                <a href="{{ route('comics.show', $key)}}" class="card m-3 text-decoration-none text-dark" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" alt="'img DC type ' + {{$comic['type']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <div><strong>Price: </strong>{{$comic['price']}}$</div>
                        <div><strong>Series: </strong> {{$comic['series']}}</div>
                        <div><strong>Sale date: </strong> {{$comic['sale_date']}}</div>
                        <div><strong>Type: </strong> {{$comic['type']}}</div>
                        <p class="card-text"><strong>Description: </strong>{{substr($comic['description'], 0, 100)}}...</p>
                    </div>
                </a>
                  
            @endforeach
            



        </div>
    </div>      
@endsection