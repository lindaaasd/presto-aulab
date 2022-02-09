<x-layout>
    <section class="container-fluid p-5">
        <h1 class="section-title text-center py-5"> I nostri ultimmi annunci </h1>
        <div class="row align-items-center justify-content-center">
            @foreach ($announcements as $announcement)
                <div class="col-6 col-md-3 card-annunci mx-5 d-flex justify-content-center">
                    <img class="rounded-pill" src="https://via.placeholder.com/150" alt="">
                    <h2 class="card-titolo"> {{ $announcement->title }} </h2>
                    <h3 class="card-prezzo"> {{ $announcement->price }} </h3>
                    <p class="text-center"> {{ $announcement->description }}</p>
                    <p class="text-center"> {{$announcement->category->name}}</p>
                    <p class="text-center">{{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
            @endforeach
        </div>
</x-layout>
