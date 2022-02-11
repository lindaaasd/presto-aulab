<x-layout>


    <section class="container d-flex justify-content-center m-5">
        <form method="POST" action="{{ route('announcement.create') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" name="title" class="question upload-input" id="nme" required autocomplete="off"
                    value="{{ old('title') }}" />
                <label for="nme" class="upload-label"><span class="upload-span"> What do you want to sell?
                    </span></label>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="text" name="price" class="question upload-input" id="nme" required autocomplete="off" />
                <label for="nme" class="upload-label"><span class="upload-span"> How much does it cost?
                    </span></label>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input name="description" class="question upload-input" value="{{ old('description') }}" id="msg"
                    required autocomplete="off"></input>
                <label class="upload-label" for="msg"><span class="upload-span">Can you describe it ?
                    </span></label>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-12 col-md-6">
                    {{-- <input class="upload-input" type="file" name="img"> --}}
                    <div class=“dropzone” id=“drophere”> 
                        @error('images')
                        <span class='invalid-feedback' role='alert'> 
                            {{$message}}
                            
                        </span>
                        @enderror
                    </div>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <select name="category" class="category-btn p-3">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="m-5">
            </div>
            <div class="d-flex justify-content-start">
                <button type="submit" class="btn category-btn"> We got it from here! </button>
            </div>
        </form>

    </section>


</x-layout>

