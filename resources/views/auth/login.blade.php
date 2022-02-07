<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center align-items-center ">
            <div class="col-6"> 
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">accedi</button>
                    <hr>
                    <a href="{{route('register')}}">Nuovo cliente? inizia qui</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
