<x-layout>

    <main class="">
        {{-- @if ($message->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($message->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        @if (session('access.denied.revisor.only'))
            <div class="alert alert-danger">
                Accesso non consentito - solo per revisori
            </div>
        @endif

        {{-- MASTHEAD --}}
        <section class="container-fluid p-5 my-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="row">
                        <div>
                            <h1 class="section-title text-center"> Presto </h1>
                        </div>
                        <div>
                            <h3 class="text-center"> something inspirational and buy worthy </h3>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-danger rounded-pill" href="{{ route('announcement.form') }}">inserisci
                                annuncio</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="https://assets.website-files.com/5ec440af4659932990a1020c/6126238e144f7970c00d7c57_60f17a27f09c3f9cecf7ef53_footer-avatar.png"
                        alt="">
                </div>
            </div>
        </section>

        {{-- SEZIONE PRESENTAZIONE DELLE CATEGORIE --}}
        <section class="container-fluid py-5">
            <h1 class="section-title text-center"> Le nostre categorie </h1>
            <h2 class="text-center"> Lasciati ispirare dalle categorie più ricercate su Presto.it </h2>
            <div class="row align-items-center justify-content-center category-wrapper">
                <div class="col-6 col-md-3 cat-col cat-col-1">
                    <div class="row">
                        <a class="category-immobili category" href="{{route('announcement.category', 3)}}">
                            <h3 class="category-title">
                                Immobili
                            </h3>
                            <div class="category-count">
                                +340.000 annunci
                            </div>
                            <img class="category-image-immobili" src="/media/immobili.png" alt="immobili">
                        </a>
                        <a class="category-elettronica category" href="{{route('announcement.category', 2)}}">
                            <h3 class="category-title">
                                Elettronica
                            </h3>
                            <div class="category-count">
                                +150.000 annunci
                            </div>
                            <img class="category-image-elettronica" src="/media/elettronica.png" alt="elettronica">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 cat-col cat-col-2">
                    <div class="row">
                        <a class="category category-lavoro" href="#">
                            <h3 class="category-title">Lavoro</h3>
                            <div class="category-count"> +300.000 annunci </div>
                            <img class="category-image-lavoro" src="/media/lavoro.png" alt="{{route('announcement.category', 4)}}">
                        </a>
                        <a class="category category-sport" href="{{route('announcement.category', 6)}}">
                            <h3 class="category-title">Sport</h3>
                            <div class="category-count"> +500.000 annunci </div>
                            <img class="category-image-sport" src="/media/sport.png" alt="">
                        </a>

                    </div>
                </div>
                <div class="col-6 col-md-3 cat-col cat-col-3">
                    <a class="category category-musica" href="">
                        <h3 class="category-title">Musica</h3>
                        <div class="category-count"> +50.000 annunci </div>
                        <img class="category-image-musica" src="/media/musica.png" alt="{{route('announcement.category', 7)}}">
                    </a>
                </div>
                <div class="col-6 col-md-3 cat-col cat-col-4">
                    <div class="row cat-small-wrapper">
                        <div class="col-12 col-md-6">
                            <a class="category category-videogiochi" href="">
                                <h3 class="category-title">Games</h3>
                                <div class="category-count"> +50.000 annunci </div>
                                <img class="category-image-videogiochi" src="/media/videogiochi.png" alt="{{route('announcement.category', 9)}}">
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a class="category category-vinili" href="{{route('announcement.category', 10)}}">
                                <h3 class="category-title">Vinili</h3>
                                <div class="category-count"> +50.000 annunci </div>
                                <img class="category-image-vinili" src="/media/vinili.png" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="category category-artigianato" href="{{route('announcement.category', 8)}}">
                                <h3 class="category-title">Artigianato</h3>
                                <div class="category-count"> +50.000 annunci </div>
                                <img class="category-image" src="/media/artigianato.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- SEZIONE CON GLI ULTIMI 5 ANNUNCI --}}

        <section class="container-fluid p-5">
            <h1 class="section-title text-center py-5"> I nostri ultimmi annunci </h1>
            <div class="row align-items-center justify-content-center">
                @foreach ($announcements as $announcement)
                    <div class="col-6 col-md-3 card-annunci mx-5 d-flex justify-content-center">
                        <img class="rounded-pill" src="https://via.placeholder.com/150" alt="">
                        <h2 class="card-titolo"> {{ $announcement->title }} </h2>
                        <h3 class="card-prezzo"> {{ $announcement->price }} </h3>
                        <p class="text-center"> {{ $announcement->description }}</p>
                        <p class="text-center">{{$announcement->created_at->format('d/m/Y')}}</p>
                        <a href="{{route('announcement.details', compact('announcement'))}}" class="btn btn-info rounded-pill">dettagli</a>
                    </div>
                @endforeach
            </div>

        </section>


        {{-- SEZIONE CON GLI ULTIMI 5 ANNUNCI test not passed --}}
        {{-- <section class="container">
    <div class="row">
        <div class="col-12">
            <section class="container">
                <div class="row">
                    @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-6 d-flex justify-content-end">
                        <section class="card-area">
                            <!-- Card: City -->
                            <section class="card-section">
                                <div class="card">
                                    <div class="flip-card">
                                        <div class="flip-card__container">
                                            <div class="card-front">
                                                <div class="card-front__tp card-front__tp--city">
                                               <h2 class="card-front__heading">
                                                  {{$announcement->title}}
                                               </h2>
                                            <p class="card-front__text-price">
                                              {{$announcement->price}} 
                                            </p>
                                                </div>
                                                <div class="card-front__bt">
                                                    <p class="card-front__text-view card-front__text-view--city">
                                                        Dettagli annuncio
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-back">
                                                <img src="{{Storage::url($announcement->img)}}" alt="ad-img" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="inside-page">
                                        <div class="inside-page__container">
                                            <h3 class="inside-page__heading inside-page__heading--city">
                                                {{$announcement->title}}
                                            </h3>
                                            <p class="inside-page__text">
                                                {{$announcement->description}}
                                            </p>
                                            <a href="#" class="inside-page__btn inside-page__btn--city"></a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</section> --}}


    </main>
</x-layout>
