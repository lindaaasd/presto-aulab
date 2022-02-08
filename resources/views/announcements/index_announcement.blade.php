<x-layout>
   <h1> appoggio page</h1>

   <body>
      <main class="main">
          <section class="card-area">
              <!-- Card: City -->
              <section class="card-section">
                  <div class="card">
                      <div class="flip-card">
                          <div class="flip-card__container">
                              <div class="card-front">
                                  <div class="card-front__tp card-front__tp--city">
                                 <h2 class="card-front__heading">
                                    {{-- {{$announcement->title}} --}}
                                 </h2>
                              <p class="card-front__text-price">
                                {{-- {{$announcement->price}}  --}}
                              </p>
                                  </div>
                                  <div class="card-front__bt">
                                      <p class="card-front__text-view card-front__text-view--city">
                                          Dettagli annuncio
                                      </p>
                                  </div>
                              </div>
                              <div class="card-back">
                                  {{-- posto per imagine --}}
                              </div>
                          </div>
                      </div>
  
                      <div class="inside-page">
                          <div class="inside-page__container">
                              <h3 class="inside-page__heading inside-page__heading--city">
                                titolo annuncio 
                              </h3>
                              <p class="inside-page__text">
                                 description del annuncio
                              </p>
                              <a href="#" class="inside-page__btn inside-page__btn--city">View altri annunci della categoria</a>
                          </div>
                      </div>
                  </div>
              </section>
          </section>
      </main>
  </body>
  </html>



</x-layout>
