@extends("layouts.base")

@section("pageTitle", "Fumetti disponibili")
        
@section('content')
    <div class="container">

        {{-- sistemare codice e  css della pagina --}}


        <a class="btn btn-primary text-white" href="{{route('comics.index')}}" role="button">Indietro</a>

       <div class="d-flex flex-column align-items-center mt-5">
            <img src="{{$comic["thumb"]}}" alt="img thumb {{$comic["title"]}}">
            <div><strong>Price: </strong>{{$comic['price']}}$</div>
            <div><strong>Series: </strong> {{$comic['series']}}</div>
            <div><strong>Sale date: </strong> {{$comic['sale_date']}}</div>
            <div><strong>Type: </strong> {{$comic['type']}}</div>
            <p class="card-text"><strong>Description: </strong>{{$comic['description']}}</p>
       </div>
        

       <div class="d-flex flex-column align-items-center mt-5">
            <div class="mt-5">ADVERTISEMENT</div>
            <a href="#"><img src="{{asset("img/adv.jpg")}}" alt="img advertisement"></a>
       </div>
    
    </div>      
@endsection