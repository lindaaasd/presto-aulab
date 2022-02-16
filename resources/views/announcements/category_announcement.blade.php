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
