@include('layouts.partials.header')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nous contactez</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
		<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">

          	@if(isset($_GET['message']) )
						  <div class="alert alert-success" role="alert"> <?= $_GET['message'];?> </div>
						 @endif

            <h2 class="h4 font-weight-bold">Contact</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Addresse:</span> Rue des poètes, 6ème arrondissement Paris</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Phone:</span> <a href="tel://1234567920">+33 7 52 08 37 30 </a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">pokebio@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Website</span> <a href="#">pokebio.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-5 order-md-last">
						<h2 class="h4 mb-5 font-weight-bold">Nous contactez</h2>
						<form action="/gcontact" method="post">
							@csrf

							@if(isset(Auth::user()->id))

              <div class="form-group">
                <input type="text" class="form-control" value="<?= Auth::user()->name ?>" id="nom" name="nom" placeholder="votre nom">
              </div>


              <div class="form-group">
                <input type="text" id="email" name="email" value="<?= Auth::user()->email ?>" class="form-control" placeholder="votre Email">
              </div>

              @else

              <div class="form-group">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="votre nom">
              </div>


              <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="votre Email">
              </div>


              @endif

              
              <div class="form-group">
                <input type="text" id="sujet" name="sujet" class="form-control" placeholder="Sujet">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
					
				</div>
			</div>
		</div>
		
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