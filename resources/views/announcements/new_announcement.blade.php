<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5 pt-5">
            <div class="col-12">
                <form method="POST" action="{{ route('announcement.create') }}" enctype="multipart/form-data">
                    @csrf
                        <h2>LA NOSTRA SECRET KEY: {{$secret}}</h2>
                        <input type="hidden" value="{{$secret}}"" name='secret'>
                        <button type="submit" class="btn category-btn"> We got it from here! </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>