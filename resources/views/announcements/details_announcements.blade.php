<x-layout>
    <x-slot name="title">Dettagli annuncio</x-slot>
    <section class="container-fluid m-5 p-5" id="bg-category">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">

                <div id="carouselDetail" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($announcement->images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img class="img-fluid card-image" src="{{ $image->getUrl(500, 500) }}"
                                    class="d-block" alt="https://via.placeholder.com/150">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDetail"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselDetail"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>
            <div class="col-8 col-md-4">

                <h2 class="text-center display-2"> {{ $announcement->title }} </h2>
                <hr>
                <div class="row justify-content-around m-5">
                    <div class="col-6 col-md-3">

                        <h3 class="text-center detail-box"> € {{ $announcement->price }} </h3>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3 class="text-center detail-box">{{ $announcement->category->name }}</h3>
                    </div>

                </div>




            </div>

        </div>
        <hr>
        <div class="container-fluid mt-5">
            <div class="row">
                <h1> <strong>Description</strong></h1>
                <div class="col-12">
                    <p class=" mt-5 fs-2"> {{ $announcement->description }}</p>
                </div>
            </div>
        </div>
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
    </section>
</x-layout>
