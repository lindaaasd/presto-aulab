<section>
    <nav class="container-fluid nav-box">
        <div class="row align-items-center">
            <div class="nav-logo col-4 col-md-2 m-0 p-0 d-flex justify-content-center">
                <a class="navbar-brand" href="{{route('welcome')}}">
                    <img class="" width="80" height="80"
                        src="https://assets.website-files.com/5ec440af4659932990a1020c/6126238e144f7970c00d7c57_60f17a27f09c3f9cecf7ef53_footer-avatar.png"
                        alt="logo">
                </a>
            </div>
            <div class="nav-cat col-4 col-md-2 dropdown m-0 p-0 d-flex justify-content-end">
                <button class="btn category-btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Categorie
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('announcement.category', compact('category'))}}" id="{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                    {{-- <li><a href="{{route('announcement.category', compact('category','announcements'))}}"></a></li> --}}
                </ul>
            </div>
            <div class="nav-search col-12 col-md-6 justify-content-start">
                <form class="d-flex ms-5 w-50">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn search-btn" type="submit">Search</button>
                </form>
            </div>
            @guest
                <div class="nav-login col-4 col-md-2 d-flex">
                    <a class="a-nav nav-link" href="{{ route('login') }}"> Accedi <i class="fas fa-user"></i> </a>
                    @else
                    <div class="nav-item ">{{ Auth::user()->name }}</div>
                    <div class="nav-item "><a class="fw-bold" href=" {{ route('logout') }}"
                                onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">
                                Logout</a></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </nav>
</section>
