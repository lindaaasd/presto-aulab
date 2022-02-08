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
 

    {{-- SEZIONE CON GLI ULTIMI 5 ANNUNCI --}}
<section class="container">
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
</x-layout>
