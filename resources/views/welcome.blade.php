@include('layouts.partials.header')
    


    
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/pokebio/2.png);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4 mt-5">Nos délicieuses spécialités</h1>
              <p><a href="{{ route('qrcode') }}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Participer au jeu pour une réduction</a></p>
            </div>

          </div>
        </div>
      </div>

     
      <div class="slider-item js-fullheight" style="background-image: url(images/pokebio/1.png);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4 mt-5">Une envie subite ?<br>Régalez-vous tout de suite </h1>
              <p><a href="{{ route('qrcode') }}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Participer au jeu pour une réduction</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

  <br>
<div class="container">
  @if(isset($_GET['message']) )
              <div class="alert alert-success" role="alert"> <?= $_GET['message'];?> </div>
    @endif
</div>
    
    

        <section class="ftco-section ftco-wrap-about ftco-no-pb" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 wrap-about ftco-animate text-center">
              <div class="heading-section mb-4 text-center">
                <span class="subheading">A propos</span>
                <h2 class="mb-4">Restaurant Pokébio</h2>
              </div>
                        <p>POKE BIO, c’est une aventure d’un couple passionné de saveurs hawaïennes et d’exotisme.</p>

                      
                    </div>
                </div>
            </div>
        </section>

        
        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
        <!-- <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter"> -->
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="row d-md-flex align-items-center">
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="18">0</strong>
                        <span>Années d'expériences</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="15000">0</strong>
                        <span>Clients satisfaits</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="100">0</strong>
                        <span>Menus</span>
                      </div>
                    </div>
                  </div>
                  
              </div>
          </div>
        </div>
        </div>
    </section>

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-4">Services de restauration</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Livraison pour des fêtes d'anniversaire</h3>
                <!--p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p-->
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Livraison pour des réunions d'affaires</h3>
                <!--p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p-->
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Livraison à domicile</h3>
                <!--p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p-->
              </div>
            </div>      
          </div>
        </div>
            </div>
        </section>




<section class="ftco-section">
      <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Specialités</span>
            <h2 class="mb-4">Notre Menu</h2>
          </div>
        </div>

        @if(!isset(Auth::user()->id))
<div class="alert alert-success" role="alert" style="text-align: center;"> <?= 'veuillez vous authentifier pour pouvoir passer votre commande';?> </div>
    @endif
        <div class="row">
          @foreach($menu as $menus)
          @if(isset(Auth::user()->id))

          <div class="col-md-6 col-lg-4 menu-wrap">
             <a href="{{ route('home', ['price' => $menus->price, 'idMenu'=>$menus->idMenu ]) }}">
            <div class="menus d-flex ftco-animate">
             <div class="menu-img img" style="background-image: url(images/{{ $menus->image }});"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>{{ $menus->name }}</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">{{ $menus->price }} £</span>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>

          @else


          <div class="col-md-6 col-lg-4 menu-wrap">
            
            <div class="menus d-flex ftco-animate">
             <div class="menu-img img" style="background-image: url(images/{{ $menus->image }});"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>{{ $menus->name }}</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">{{ $menus->price }} £</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        @endif
      @endforeach      

        
        </div>
      </div>
    </section>









   
    
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Chef</span>
            <h2 class="mb-4">Nos chefs cuisiniers</h2>
          </div>
        </div>  
                <div class="row justify-content-center ">
                    <div class="col-md-12 col-lg-4 ftco-animate">
                        <div class="staff">
                            <div class="img" style="background-image: url(images/chef-4.jpg);"></div>
                            <div class="text pt-4">
                                <h3>Laurent</h3>
                                <span class="position mb-2">Propriétaire du restaurant</span>
                                <div class="faded">
                                    <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                    <ul class="ftco-social d-flex">
                        <li class="ftco-animate"><a href="https://www.instagram.com/pokebio6/"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 ftco-animate">
                        <div class="staff">
                            <div class="img" style="background-image: url(images/chef-2.jpg);"></div>
                            <div class="text pt-4">
                                <h3>Isabelle</h3>
                                <span class="position mb-2">Chef de cuisine</span>
                
                                <div class="faded">
                                    <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                    <ul class="ftco-social d-flex">
                        <li class="ftco-animate"><a href="https://www.instagram.com/pokebio6/"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </section>

        
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-md">
                        <a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-1.jpg);">
                            <span class="ion-logo-instagram"></span>
                        </a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-2.jpg);">
                            <span class="ion-logo-instagram"></span>
                        </a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-3.jpg);">
                            <span class="ion-logo-instagram"></span>
                        </a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-4.jpg);">
                            <span class="ion-logo-instagram"></span>
                        </a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(images/insta-5.jpg);">
                            <span class="ion-logo-instagram"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    @include('layouts.partials.footer')