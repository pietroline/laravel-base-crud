@extends("layouts.base")

@section("pageTitle", "Fumetti disponibili")

@section("cssStyle")
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
        
@section('content')
    <div class="container" style="height:100vw">


        <div class="row">
            <div class="col d-flex justify-content-center py-5">
                <a class="btn btn-primary text-white" href="{{route('comics.create')}}" role="button">Aggiungi Fumetto</a>
            </div>
        </div>

        <div class="row row-cols-4">


            @foreach ($comics as $comic)
 
               <div class="col card-group d-flex flex-column my-5">

                    <a href="{{ route('comics.show', $comic->id)}}" class="card m-3 text-decoration-none text-dark">
                        <img src="{{$comic['thumb']}}" alt="img DC type  {{$comic['title']}}">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{$comic['title']}}</strong></h5>
                            <div><strong>Price: </strong>{{$comic['price']}}$</div>
                            <div><strong>Series: </strong> {{$comic['series']}}</div>
                            <div><strong>Sale date: </strong> {{$comic['sale_date']}}</div>
                            <div><strong>Type: </strong> {{$comic['type']}}</div>
                        </div>
                    </a>

                    <a class="btn btn-warning ms_negative_margin_top mx-3" href="{{route('comics.edit', $comic->id)}}" role="button">Modifica</a>
                    
                    <form class="d-grid" method="POST" action="{{route('comics.destroy', $comic->id)}}" onsubmit="return checkDelete()">

                        {{-- meccanismo di sicurezza--}}
                        @csrf

                        {{-- metodo DELETE di POST --}}
                        @method("DELETE")

                        <button class="btn btn-danger mx-3" role="button">Elimina</button>

                    </form>
                    
               </div>
                  
            @endforeach
            



        </div>
    </div>      
@endsection