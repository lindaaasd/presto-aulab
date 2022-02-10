<x-layout>

@if($announcement)

<section class="container">
    <h2>
        Welcome, {{ Auth::user()->name }}
    </h2>
    <div class="row">
    <div class="col-12">
        # {{$announcement->user->id }}
         {{$announcement->user->name}}
         {{$announcement->user->email}}
    </div>
    </div>
</section>

<section>
    <form action="{{route('revisor.accept', $announcement->id)}}" method="POST">
        @csrf
        <button class="btn btn-success" type="submit">Accept</button>
    </form>
    <form action="{{route('revisor.reject', $announcement->id)}}" method="POST">
        @csrf
        <button class="btn btn-danger" type="submit">reject</button>
    </form>
</section>


@else 

<div class="container">
    <div class="row">
        <div class="col-12">

          <h3>  Non ci sono annunci </h3> 
        </div>
    </div>
</div>

@endif
</x-layout>