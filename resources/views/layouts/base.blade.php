<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('pageTitle')</title>

        {{-- link css generali compreso bootstrap--}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        {{-- link css specifici --}}
        @yield("cssStyle")

    </head>

    <body>
       
        @include("partials/header") 

        {{-- redirecting width flashed sesseion data --}}
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


        {{-- catch validation error--}}
        @if ($errors->any())
            <div class="aler alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <main>
            @yield('content')
        </main>


        

        @yield("scriptJs")
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>

</html>