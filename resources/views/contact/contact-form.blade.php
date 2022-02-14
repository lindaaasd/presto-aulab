<x-layout>
      <div class="wrapper m-5">
        <form class="form" action="{{route('contact.submit')}}" method="POST">
            @csrf 
          <div class="pageTitle title"> Contact us </div>
          <div class="secondaryTitle title">Please fill this form to send us your questions.</div>
          <input type="text" class="name formEntry" placeholder="Name" name="name" />
          <input type="text" class="email formEntry" placeholder="Email" name="email" />
          <textarea class="message formEntry" placeholder="Message" name="message"></textarea>
          <input type="checkbox" class="termsConditions" value="Term">
          <label style="color: grey" for="terms"> I Accept the <span style="color: #0e3721">Terms of Use</span> & <span style="color: #0e3721">Privacy Policy</span>.</label><br>
          <button class="submit formEntry" onclick="thanks()">Submit</button>
        </form>
      </div>

</x-layout>