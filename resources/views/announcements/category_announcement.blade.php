<x-layout>
    <x-slot name="title">category</x-slot>
    <section class="container-fluid p-5">
        <h1 class="section-title text-center py-5">{{ __('ui.lastAds') }}</h1>
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselWelcome"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselWelcome"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                        <h2 class="card-titolo fs-3 fw-bold"> {{ $announcement->title }} </h2>
                        <h3 class="card-prezzo fs-6"> {{ $announcement->price }} </h3>
                        <p class="text-center fs-5"> {{ $announcement->description }}</p>
                        <p class="text-center fs-5">{{ $announcement->created_at->format('d/m/Y') }}</p>
                        <a href="{{ route('announcement.details', compact('announcement')) }}"
                            class="btn btn-info rounded-pill">dettagli</a>
                    </div>
                @endif
            @endforeach
        </div>

    </section>





        <script>
            window.onload = function() {
                let categoryId =
                    '{{ $announcement->category->id }}'; //il categoryId lo prendi dall'annuncio e lo metti qui dentro con PHP
                let backgroundColorBasedOnCategory = "";
                switch (categoryId) {
                    case '1':
                        backgroundColorBasedOnCategory = '#FF89C230';
                        break;
                    case '2':
                        backgroundColorBasedOnCategory = "#60B1D230";
                        break;
                    case '3':
                        backgroundColorBasedOnCategory = "#D2FD6130";
                        break;
                    case '4':
                        backgroundColorBasedOnCategory = "#FF89C230";
                        break;
                    case '5':
                        backgroundColorBasedOnCategory = "#13C1AC30";
                        break;
                    case '6':
                        backgroundColorBasedOnCategory = "#FD6C6730";
                        break;
                    case '7':
                        backgroundColorBasedOnCategory = "#385EF930";
                        break;
                    case '8':
                        backgroundColorBasedOnCategory = "#F4970B30";
                        break;
                    default:
                        backgroundColorBasedOnCategory = "white30";
                }

                $('body').css("background-color", backgroundColorBasedOnCategory);
            }();
        </script>
</x-layout>
