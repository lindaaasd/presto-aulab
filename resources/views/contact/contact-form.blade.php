<x-layout>
  <x-slot name="title">Contact</x-slot>
      <section class="wrapper m-5">
        <form class="form" action="{{route('contact.submit')}}" method="POST">
            @csrf 
          <div class="pageTitle title"> Contact us </div>
          <div class="secondaryTitle title">Please fill this form to send us your questions.</div>
          <input type="text" class="name formEntry" placeholder="Name" name="name" />
          <input type="text" class="email formEntry" placeholder="Email" name="email" />
          <textarea class="message formEntry" placeholder="Message" name="message"></textarea>
          <button class="submit formEntry" onclick="thanks()">Submit</button>
        </form>
      </section>

</x-layout>