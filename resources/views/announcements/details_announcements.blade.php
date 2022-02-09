<x-layout>
    <section class="container-fluid p-5">
        <h1 class="section-title text-center py-5"> Details </h1>
        <div class="row align-items-center justify-content-center">
            <div class="col-6 col-md-3 card-annunci mx-5 d-flex justify-content-center">
                <h2 class="card-titolo"> {{ $announcement->title }} </h2>
                <h3 class="card-prezzo"> {{ $announcement->price }} </h3>
                <p class="text-center"> {{ $announcement->description }}</p>
                <div id="carouselExampleControls"  class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="https://via.placeholder.com/150" class="d-block" alt="https://via.placeholder.com/150">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://via.placeholder.com/150" class="d-block" alt="https://via.placeholder.com/150">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://via.placeholder.com/150" class="d-block" alt="https://via.placeholder.com/150">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-layout>

