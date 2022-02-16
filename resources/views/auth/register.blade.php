<x-layout>
  <x-slot name="title">Register</x-slot>


  <section class="wrapper m-5">
    <form class="form" action="{{ route('register') }}" method="POST">
        @csrf 
      <div class="pageTitle title"> Register </div>
      <input type="text" class="name formEntry" placeholder="Username" name="name" />
      <input type="email" class="email formEntry" placeholder="Email" name="email" />
      <input type="password" class="email formEntry" placeholder="Password" name="password" />
      <input type="password" class="email formEntry" placeholder="Confirm Password" name="password_confirmation" />


      <button class="submit formEntry" type="submit" onclick="thanks()">Register</button>
      <div class="social-media">
        <ul>
            <li><img
                    src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/facebook.png">
            </li>
            <li><img
                    src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/twitter.png">
            </li>
            <li><img
                    src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/linkedin.png">
            </li>
            <li><img
                    src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/instagram.png">
            </li>
        </ul>
    </div>
    </form>
  </section>

</x-layout>
