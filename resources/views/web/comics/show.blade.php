@extends("layouts.base")

@section("pageTitle", "Fumetti disponibili")
        
@section('content')
    <div class="container" style="height:100vw">

          <div class="row py-4">
               <div class="col">
                    <a class="btn btn-primary text-white" href="{{route('comics.index')}}" role="button">Indietro</a>
                    <a class="btn btn-warning ms_btn" href="{{route('comics.edit', $comic->id)}}" role="button">Modifica</a>
               </div>
          </div>

          <div class="row row-cols-1">

               <div class="col py-2">
                    <img src="{{$comic["thumb"]}}" alt="img thumb {{$comic["title"]}}">
               </div>

               <div class="col py-2">
                    <div><strong>Title: </strong>{{$comic["title"]}}</div>
               </div>

               <div class="col py-2">
                    <div><strong>Price: </strong>{{$comic['price']}}$</div>
               </div>

               <div class="col py-2">
                    <div><strong>Series: </strong> {{$comic['series']}}</div>
               </div>

               <div class="col py-2">
                    <div><strong>Sale date: </strong> {{$comic['sale_date']}}</div>
               </div>

               <div class="col py-2">
                    <div><strong>Type: </strong> {{$comic['type']}}</div>
               </div>

               <div class="col py-2">
                    <p class="card-text"><strong>Description: </strong>{{$comic['description']}}</p>
               </div>
              
          </div>
          

          <div class="row mt-5">
             <div class="col d-flex flex-column align-items-center">
                    <div class="mt-5">ADVERTISEMENT</div>
                    <a href="#"><img src="{{asset("img/adv.jpg")}}" alt="img advertisement"></a>
             </div>
          </div>
    
    </div>      
@endsection