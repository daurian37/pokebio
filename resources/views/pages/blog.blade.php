@include('layouts.partials.header')


    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section">
			<div class="container">
				<div class="row">
                                     @php
                                        $date = date('Y-m-d');
                                    @endphp
          @foreach($menu as $menus)
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/{{ $menus->image }}');">
              </a>
              <div class="text pt-3 pb-4">
                <div class="meta">
                  <div><a href="#"><?= $date; ?></a></div>
                </div>
                <h3 class="heading"><a href="#">{{ $menus->name }}</a></h3>
                <p class="clearfix">
                  <a href="{{ route('blog-single', ['image' => $menus->image,'name' => $menus->name]) }}" class="float-left read">Lire plus</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
         @endforeach
          
          
        
			</div>
		</section>


    
@include('layouts.partials.footer')