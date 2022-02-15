<x-layout>
    <section class="container-fluid p-5">
        <h1 class="section-title text-center py-5"> Details </h1>
        <div class="row w-100 align-items-center justify-content-center">
            <div class="col-12 w-100 card-annunci mx-5 d-flex justify-content-center">
                <h2 class="card-titolo"> {{ $announcement->title }} </h2>
                <h3 class="card-prezzo"> {{ $announcement->price }} </h3>
                <p class="text-center"> {{ $announcement->description }}</p>
                <p class="text-center"><a
                        href="{{ route('announcement.category', ['id' => $announcement->category->id]) }}">
                        {{ $announcement->category->name }}</a></p>
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
        </div>
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
