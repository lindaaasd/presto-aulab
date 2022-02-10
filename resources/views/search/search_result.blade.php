<x-layout>
    <section class="container">
        <div class="row">
            <h3 class="display-1 mt-5 pt-5 text-center">risultati ricerca per: {{ $q }}</h3>
            @foreach ($announcements as $announcement)
                <h3 class="display-2">{{$announcement->title}}</h3>
            @endforeach
        </div>
    </section>
</x-layout>
