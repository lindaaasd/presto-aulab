<x-layout>
    <x-slot name="title">Dettagli annuncio</x-slot>
    @if ($announcement)
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
                <div class="col-8 col-md-4 ">
                    <h2 class="text-center display-2"> {{ $announcement->title }} </h2>
                    <hr>
                        <div class="row justify-content-evenly m-5">
                            <div class="col-6 col-md-3 d-flex justify-content-center mx-2">
                                <h3 class="text-center detail-box p-3">{{ $announcement->price }} </h3>
                            </div>
                            <div class="col-6 col-md-3 d-flex justify-content-center mx-2">
                                <h3 class="text-center detail-box p-3">{{ $announcement->category->name }}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <h1 class="text-center"> <strong>Description</strong></h1>
                            <div class="col-12">
                                <p class=" mt-5 fs-2"> {{ $announcement->description }}</p>
                            </div>
                        </div>
                    <hr>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-md-6 d-flex justify-content-center py-2">
                            <form action="{{ route('revisor.accept', ['id' => $announcement->id]) }}"
                                method="POST">
                                @csrf
                                <button class="btn btn-success px-5 rounded-pill" type="submit">Accept</button>
                            </form>
                        </div>
                        <div class="class-12 col-md-6 d-flex justify-content-center py-2">
                            <form action="{{ route('revisor.reject', ['id' => $announcement->id]) }}"
                                method="POST">
                                @csrf
                                <button class="btn btn-danger px-5 rounded-pill" type="submit">reject</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
        </section>
    @else
        <div class="container-fluid m-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="display-2 text-center"> #404 not found, Roberto don't get mad pls </h3>
                </div>
            </div>
        </div>
    @endif
</x-layout>
