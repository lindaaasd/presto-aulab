<x-layout>

    @if ($announcement)

        <section class="container">
            <h2 class="display-2 text-center">
                Welcome, {{ Auth::user()->name }}
            </h2>
            <div class="col-12 col-md- card-annunci mx-5 d-flex justify-content-center">
                <img class="rounded-pill" src="https://via.placeholder.com/150" alt="">
                <h2 class="card-titolo"> # {{ $announcement->user->id }} </h2>
                <h3 class="card-prezzo"> {{ $announcement->user->name }} </h3>
                <p class="text-center"> {{ $announcement->user->email }}</p>
                <h3 class="text-center">{{$announcement->title}}</h3>
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
            

            <section class="container">
                <div class="row">
                    <div class="col-md-2">
                        <h3 class="text-center">Immagini</h3>
                    </div>
                    <div class="col-md-10">
                        @foreach ($announcement->images as $image)
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img src="{{ Storage::url($image->file) }}" class="rounded" alt="">
                                </div>
                                <div class="col-md-8">
                                    {{ $image->id }} <br>
                                    {{ $image->file }} <br>
                                    {{ Storage::url($image->file) }} <br>
                                </div>
                            </div>
                        @endforeach
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
