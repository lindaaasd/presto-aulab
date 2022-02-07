<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 ">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>INDEX PRODOTTI</h1>
                @foreach ($announcements as $announcement)
                    <h1>{{$announcement->title}}</h1>
                    <h1>{{$announcement->price}}</h1>
                    <h1>{{$announcement->description}}</h1>
                    <h1><img class="img-fluid" src="{{Storage::url($announcement->img)}}" alt="ferrari" ></h1>
            
                    
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
