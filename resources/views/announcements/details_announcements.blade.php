<x-layout>
  <x-slot name="title">Dettagli annuncio</x-slot>
    <section class="container-fluid m-5 p-5">
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
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselDetail" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselDetail" data-bs-slide="next">
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
                <h3 class="text-center detail-box">{{$announcement->category->name}}</h3>
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



        {{-- <h1 class="section-title text-center py-5"> Details </h1>
        <div class="row w-100 align-items-center justify-content-center">
            <div class="col-12 w-100 card-annunci mx-5 d-flex justify-content-center">
                <h2 class="card-titolo"> {{ $announcement->title }} </h2>
                <h3 class="card-prezzo"> {{ $announcement->price }} </h3>
                <p class="text-center"> {{ $announcement->description }}</p>
                
                <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($announcement->images as $key=>$image)
                            <div class="carousel-item {{$key==0 ? 'active' : ''}}">

                                <img class="img-fluid" src="{{ $image->getUrl(300, 150) }}"
                                    class="d-block" alt="https://via.placeholder.com/150">
                            </div>
                        @endforeach


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div class="col-10">
                        Adult:   {{$image->adult}} <br>
                        Spoof:  {{$image->spoof}} <br>
                        Racy: {{$image->racy}} <br>
                       </div>
                </div>
            </div>
        </div> --}}
    </section>
</x-layout>

{{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> --}}
