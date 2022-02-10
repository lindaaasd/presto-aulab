<x-layout>

@if(announcement)

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