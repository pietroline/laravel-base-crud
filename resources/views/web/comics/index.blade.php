@extends("layouts.base")

@section("pageTitle", "Fumetti disponibili")
        
@section('content')
    <div class="container">


        <div class="row">
            <div class="col d-flex justify-content-center py-5">
                <a class="btn btn-primary text-white" href="{{route('comics.create')}}" role="button">Aggiungi Fumetto</a>
            </div>
        </div>

        <div class="row row-cols-4">


            @foreach ($comics as $comic)
 
               <div class="col card-group">
                    <a href="{{ route('comics.show', $comic->id)}}" class="card m-3 text-decoration-none text-dark">
                        <img src="{{$comic['thumb']}}" alt="'img DC type ' + {{$comic['type']}}">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{$comic['title']}}</strong></h5>
                            <div><strong>Price: </strong>{{$comic['price']}}$</div>
                            <div><strong>Series: </strong> {{$comic['series']}}</div>
                            <div><strong>Sale date: </strong> {{$comic['sale_date']}}</div>
                            <div><strong>Type: </strong> {{$comic['type']}}</div>
                        </div>
                    </a>
               </div>
                  
            @endforeach
            



        </div>
    </div>      
@endsection