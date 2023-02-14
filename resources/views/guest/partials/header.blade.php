@dump(Route::currentRouteName())
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{Vite::asset('resources/assets/img/dc-logo.png')}}" alt="dc logo">
            <!-- Per inserire immagini -> Vite::asset('resources/assets/img/logo.png')-->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="#">Characters</a>
            </li>
            <li class="nav-item border-bottom border-primary">
            <a class="nav-link active" aria-current="page" href="#">Comics</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Movies</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">TV</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Collectibles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Fans</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-sm btn-success text-uppercase" href="#">Admin Login</a>
            </li>
            
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>