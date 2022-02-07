<x-layout>
    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
</x-layout>
