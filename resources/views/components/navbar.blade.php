<section>
    <nav class="container-fluid nav-box">
        <div class="row align-items-center">
            <div class="nav-logo col-4 col-md-2 m-0 p-0 d-flex justify-content-center">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img class="" width="80" height="80"
                        src="https://assets.website-files.com/5ec440af4659932990a1020c/6126238e144f7970c00d7c57_60f17a27f09c3f9cecf7ef53_footer-avatar.png"
                        alt="logo">
                </a>
            </div>
            <div class="nav-cat col-4 col-md-2 dropdown m-0 p-0 d-flex justify-content-end">
                <button class="btn category-btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{__('ui.message')}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('announcement.category', $category->id) }}"
                                id="{{ $category->id }}">{{ $category->name }}</a></li>
                    @endforeach
                    {{-- <li><a href="{{route('announcement.category', compact('category','announcements'))}}"></a></li> --}}
                </ul>
            </div>
            <div class="nav-search col-12 col-md-6 justify-content-between align-items-center">
                <form method="GET" action="{{ route('search') }}" class="d-flex ms-5 w-50">
                    <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn search-btn" type="submit">Search</button>
                </form>


                <div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            scegli lingua
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li>
                                @include('components._locale', ['lang'=>'it', 'nation'=>'it'])
                            </li>
                            <li>
                                @include('components._locale', ['lang'=>'en', 'nation'=>'us'])
                            </li>
                            <li>
                                @include('components._locale', ['lang'=>'es', 'nation'=>'es'])
                            </li>
                        </ul>
                    </div>
                    @guest
                        <div class="nav-login col-4 col-md-2 d-flex mx-5">
                            <button class="btn login-nav-button"><a class="a-nav nav-link" href="{{ route('login') }}"><i
                                        class="fas fa-user text-white"></i>
                                </a></button>
                        @else
                            <li class="nav-item dropdown me-4">
                                <a class="nav-link dropdown-toggle user-name" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="ps-3"><a class="dropdown-item " href="#">
                                            <div class="nav-item user-name"><a class="fw-bold"
                                                    href=" {{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">
                                                    Logout</a></div>
                                        </a></li>
                                    @if (Auth::user()->is_revisor)
                                        <li><a class="dropdown-item" href="{{ route('revisor.welcome') }}"> Revisor Home
                                            </a>
                                            <span
                                                class="badge badge-pill badge-warning">{{ \App\Models\Announcement::ToBeRevisionedCount() }}
                                            </span>
                                        </li>
                                    @endif
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    @endguest
                </div>


            </div>
        </div>
    </nav>
</section>
