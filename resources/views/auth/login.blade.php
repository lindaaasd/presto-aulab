<x-layout>
  <x-slot name="title">Log In</x-slot>

  <section class="wrapper m-5">
    <form class="form" action="{{ route('login') }}" method="POST">
        @csrf 
      <div class="pageTitle title"> Log In </div>
      <input type="email" class="email formEntry" placeholder="Email" name="email" />
      <input type="password" class="email formEntry" placeholder="Password" name="password" />
      <button class="submit formEntry" type="submit" onclick="thanks()">Submit</button>
      <a href="{{route('register')}}">
      <p class="forgot-pass">New user? Register here</p>
    </form>
  </section>

</x-layout>
