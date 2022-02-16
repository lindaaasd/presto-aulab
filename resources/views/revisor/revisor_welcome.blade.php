<x-layout>
  <x-slot name="title">Revisore</x-slot>
    @if ($announcement)

        <section class="container">
            <h2 class="display-2 text-center">
                Welcome, {{ Auth::user()->name }}
            </h2>
            <div class="col-12 col-md- card-annunci mx-5 d-flex justify-content-center">
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($announcement->images as $key=>$image)
                            <div class="carousel-item {{$key==0 ? 'active' : ''}}">

                                <img class="img-fluid" src="{{ $image->getUrl(300, 150) }}"
                                    class="d-block" alt="https://via.placeholder.com/150">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h2 class="card-titolo"> # {{ $announcement->user->id }} </h2>
                <h3 class="card-prezzo"> {{ $announcement->user->name }} </h3>
                <p class="text-center"> {{ $announcement->user->email }}</p>
                <h3 class="text-center">{{ $announcement->title }}</h3>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="{{ route('revisor.accept', ['id' => $announcement->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-success" type="submit">Accept</button>
                        </form>
                    </div>
                    <div class="class-12 col-md-6">

                        <form action="{{ route('revisor.reject', ['id' => $announcement->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger" type="submit">reject</button>
                        </form>
                    </div>
                </div>
            </div>
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
