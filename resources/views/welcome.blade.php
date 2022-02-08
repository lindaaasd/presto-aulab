<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5 ">
                <a class="btn btn-danger rounded-pill" href="{{ route('announcement.form') }}">inserisci annuncio</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
 {{-- SEZIONE PRESENTAZIONE DEGLI ANNUNCI --}}
        <section class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-6 col-md-3 cat-col cat-col-1">
                    <div class="row">
                        <a class="category-immobili category" href=""> 
                            <h3 class="category-title">
                                Immobili
                            </h3>
                            <div class="category-count">
                                +340.000 annunci
                            </div>
                            <img class="category-image"src=""  alt="immobili">
                        </a>
                        <a class="category-elettronica category"href="">
                            <h3 class="category-title">
                                Elettronica
                            </h3>
                            <div class="category-count">
                                +150.000 annunci
                            </div>
                            <img class="img-fluid category-image"src="/media/elettronica.png" alt="elettronica">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 cat-col cat-col-2">
                    <div class="row">
                        <a class="category category-lavoro" href="">
                            <h3 class="category-title">Lavoro</h3>
                            <div class="category-count"> +300.000 annunci </div>
                            <img class="category-image" src="" alt="">
                        </a>
                        <a class="category category-sport"  href="">
                            <h3 class="category-title">Sport</h3>
                            <div class="category-count"> +500.000 annunci </div>
                            <img class="category-image" src="" alt="">
                        </a>

                    </div>
                </div>
                <div class="col-6 col-md-3 cat-col cat-col-3">
                    <a class="category category-musica" href="">
                        <h3 class="category-title">Musica</h3>
                        <div class="category-count"> +50.000 annunci </div>
                        <img class="category-image" src="" alt="">
                    </a>
                </div>
                <div class="col-6 col-md-3 cat-col cat-col-4">
                    <div class="row cat-small-wrapper">
                        <div class="col-12 col-md-6">
                            <a class="category category-videogiochi"href="">
                                <h3 class="category-title">Videogiochi</h3>
                            <div class="category-count"> +50.000 annunci </div>
                            <img class="category-image" src="" alt="">
                            </a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a class="category category-vinili" href="">
                                <h3 class="category-title">Vinili</h3>
                                <div class="category-count"> +50.000 annunci </div>
                                <img class="category-image" src="" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="category category-artigianato" href="">
                                <h3 class="category-title">Artigianato</h3>
                                <div class="category-count"> +50.000 annunci </div>
                                <img class="category-image" src="" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    {{-- SEZIONE CON GLI ULTIMI 5 ANNUNCI --}}
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
</section>
 --}}

</x-layout>
