<x-layout>
    <section class="container">
        <div class="row">
            <h3 class="display-1 mt-5 pt-5 text-center">risultati ricerca per: {{ $q }}</h3>
            {{-- @foreach ($announcements as $announcement)
                <h3 class="display-2">{{$announcement->title}}</h3>
                @endforeach --}}
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
    </section>
</x-layout>


