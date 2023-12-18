<nav class="navbar navbar-expand-lg bg-body-primary">
    <div class="container py-3">
        <div id="logo" class="text-center">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </div> 
        <div class="d-flex">
            <ul class="d-flex align-items-center list-unstyled m-0">
                @foreach ($store['nav'] as $item)
                    <li class="mb-0 mx-3 @if ($item === $store['nav'][count($store['nav'])-1]){{'d-none'}}@endif ">{{ $item }}</li>
                    @if ($item === $store['nav'][count($store['nav'])-1])
                        <li class="nav-item dropdown mb-0 mx-3">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $item }}
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    @endif 
                @endforeach

            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>