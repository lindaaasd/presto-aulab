<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5 pt-5">
            <div class="col-12">
                <form method="POST" action="{{ route('announcement.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">title</label>
                        <input type="text" name='title' value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">price</label>
                        <input type="text" name='price' value="{{ old('price') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">description</label>
                        <textarea name='description' value="{{ old('description') }}"></textarea>
                    </div>
                    <select name="category" >
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="file" name="img">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn rounded-pill btn-danger">inserisci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
