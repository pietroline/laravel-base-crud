<header>
    <div class="container-fluid">
        <div class="row bg-primary ms_height_2rem">

            <div class="d-flex justify-content-end align-items-center mb-5">
                <a href="#" class="me-3 text-decoration-none text-white fw-bold">DC POWER&#8482; VISA&#174;</a>

                <a href="#" class="text-decoration-none text-white fw-bold">ADDITIONAL DC SITES</a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light pb-0">
                <div class="container-fluid">
                    <a class="navbar-brand fs-1" href="{{route('home')}}">Comics</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                            <li class="nav-item {{Request::route()->getname() == "home" ? 'ms_active' : ''}}">
                                <a href="{{route('home')}}">Home</a>
                            </li>
    
                            <li class="nav-item {{Request::route()->getname() == "comics.index" || 
                                                    Request::route()->getname() == "comics.show" ||
                                                     Request::route()->getname() == "comics.edit" ? 'ms_active' : ''}}">
                                <a href="{{route('comics.index')}}">Comics</a>
                            </li>
    
                            <li class="nav-item {{Request::route()->getname() == "chiSiamo" ? 'ms_active' : ''}}">
                                <a href="{{route('chiSiamo')}}">Chi siamo</a>
                            </li>
    
                            <li class="nav-item {{Request::route()->getname() == "contattaci" ? 'ms_active' : ''}}">
                                <a href="{{route('contattaci')}}">Contattaci</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
</header>