<x-layout>
  <x-slot name="title">Presto.it</x-slot>

    <main class="">
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
                            <h1 class="section-title text-center display-2 fw-bold"> Presto </h1>
                        </div>
                        <div>
                            <h3 class="text-center display-4"> {{__('ui.frase_1')}}</h3>
                        </div>
                        <div class="text-center">
                            <a class="btn bubbly-button rounded-pill fs-2"
                                href="{{ route('announcement.form') }}">{{__('ui.ins_ad')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <img src="https://assets.website-files.com/5ec440af4659932990a1020c/6126238e144f7970c00d7c57_60f17a27f09c3f9cecf7ef53_footer-avatar.png"
                        alt="">
                </div>
            </div>
        </section>

        {{-- SEZIONE PRESENTAZIONE DELLE CATEGORIE --}}
        <section class="container-fluid py-5">
            <h1 class="section-title text-center">{{__('ui.cat_h1')}}</h1>
            <h2 class="text-center">{{__('ui.frase_2')}}</h2>
            <div class="row align-items-center justify-content-center category-wrapper">
                <div class="col-12 col-md-3">
                    <div class="row">
                        <a class="category-immobili category" href="{{ route('announcement.category', 3) }}">
                            <h3 class="category-title">
                                Immobili
                            </h3>
                            <div class="category-count">
                                +340.000 annunci
                            </div>
                            <img class="category-image-immobili" src="/media/immobili.png" alt="immobili">
                        </a>
                        <a class="category-elettronica category" href="{{ route('announcement.category', 2) }}">
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
                <div class="col-12 col-md-3">
                    <div class="row">
                        <a class="category category-lavoro" href="{{ route('announcement.category', 4) }}">
                            <h3 class="category-title">Lavoro</h3>
                            <div class="category-count"> +300.000 annunci </div>
                            <img class="category-image-lavoro" src="/media/lavoro.png"
                                alt="">
                        </a>
                        <a class="category category-sport" href="{{ route('announcement.category', 6) }}">
                            <h3 class="category-title">Sport</h3>
                            <div class="category-count"> +500.000 annunci </div>
                            <img class="category-image-sport" src="/media/sport.png" alt="">
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <a class="category category-musica" href="{{ route('announcement.category', 7) }}">
                        <h3 class="category-title">Musica</h3>
                        <div class="category-count"> +50.000 annunci </div>
                        <img class="category-image-musica" src="/media/musica.png"
                            alt="">
                    </a>
                </div>
                <div class="col-12 col-md-3">
                    <div class="row cat-small-wrapper">
                        <div class="col-12 col-md-6">
                            <a class="category category-videogiochi" href="{{ route('announcement.category', 5) }}">
                                <h3 class="category-title">Games</h3>
                                <div class="category-count"> +50.000 annunci </div>
                                <img class="category-image-videogiochi" src="/media/videogiochi.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a class="category category-vinili" href="{{ route('announcement.category', 1) }}">
                                <h3 class="category-title">Vinili</h3>
                                <div class="category-count"> +50.000 annunci </div>
                                <img class="category-image-vinili" src="/media/vinili.png" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="category category-artigianato" href="{{ route('announcement.category', 8) }}">
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
            <h1 class="section-title text-center py-5">{{__('ui.lastAds')}}</h1>
            <div class="row align-items-center justify-content-center">
                @foreach ($announcements as $announcement)
                    @if ($announcement->is_accepted)
                        <div class="col-6 col-md-3 card-annunci m-5 d-flex justify-content-center">
                            <div id="carouselWelcome" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($announcement->images as $key => $image)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img class="img-fluid card-image" src="{{ $image->getUrl(300, 150) }}"
                                                class="d-block" alt="https://via.placeholder.com/150">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselWelcome" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselWelcome" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                            <h2 class="card-titolo"> {{ $announcement->title }} </h2>
                            <h3 class="card-prezzo"> {{ $announcement->price }} </h3>
                            <p class="text-center"> {{ $announcement->description }}</p>
                            <p class="text-center">{{ $announcement->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('announcement.details', compact('announcement')) }}"
                                class="btn btn-info rounded-pill">dettagli</a>
                        </div>
                    @endif
                @endforeach
            </div>

        </section>

    </main>
</x-layout>
