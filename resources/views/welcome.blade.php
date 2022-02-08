<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5 ">
                <a class="btn btn-danger rounded-pill" href="{{ route('announcement.form') }}">inserisci annuncio</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        @foreach ($announcements as $announcement)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ $announcement->title }}
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            <img class="img-fluid" width="90" height="90" src="https://via.placeholder.com/150" alt="immagine annuncio" class="rounded float-right">
                            {{ $announcement->description }}
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <address>{{ $announcement->created_at->format('d/m/Y') }}</address>
                        <h4>Category: <a href="">{{ $announcement->category->name }}</a></h4>
                        <h4>{{ $announcement->user->name }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
