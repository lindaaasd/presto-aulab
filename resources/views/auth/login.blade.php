<x-layout>
    <section class="container-fluid my-5 p-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
              <div class="cont">
                  <form class="login-form sign-in" method="POST" action="{{ route('login') }}">
                    @csrf 
                      <h2 class="login-title">Sign In</h2>
                      <label class="login-label">
                          <span class="login-span">Email Address</span>
                          <input class="login-input" type="email" name="email">
                      </label>
                      <label class="login-label">
                          <span class="login-span">Password</span>
                          <input class="login-input" type="password" name="password">
                      </label>
                      <div class="d-flex justify-content-center flex-column align-items-center">
                        <button class="login-submit text-center category-btn" type="button">Sign In</button>
                        <p class="forgot-pass">Forgot Password ?</p>

                      </div>
          
                      <div class="social-media">
                          <ul>
                              <li><img src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/facebook.png"></li>
                              <li><img src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/twitter.png"></li>
                              <li><img src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/linkedin.png"></li>
                              <li><img src="https://raw.githubusercontent.com/abo-elnoUr/public-assets/master/instagram.png"></li>
                          </ul>
                      </div>
                  </form>
          
                  <div class="sub-cont">
                      <div class="img">
                          <div class="img-text m-up">
                              <h2>New here?</h2>
                              <p>Sign up and discover great amount of new opportunities!</p>
                          </div>
                          <div class="img-text m-in">
                              <h2>One of us?</h2>
                              <p>If you already has an account, just sign in. We've missed you!</p>
                          </div>
                          <div class="img-btn">
                              <span class="m-up login-span">Sign Up</span>
                              <span class="m-in login-span">Sign In</span>
                          </div>
                      </div>
                      <div class="form sign-up">
                          <h2 class="login-title m-3">Sign Up</h2>
                          <label class="login-label">
                              <span class="login-span">Name</span>
                              <input class="login-input" type="text">
                          </label>
                          <label class="login-label">
                              <span class="login-span">Email</span>
                              <input class="login-input" type="email">
                          </label>
                          <label class="login-label">
                              <span class="login-span">Password</span>
                              <input class="login-input" type="password">
                          </label>
                          <label class="login-label">
                              <span class="login-span">Confirm Password</span>
                              <input class="login-input" type="password">
                          </label>
                          <div class="d-flex align-items-center justify-content-center m-5">
                            <button type="button" class="category-btn submit text-center">Sign Up Now</button>

                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
    </section>


</x-layout>
