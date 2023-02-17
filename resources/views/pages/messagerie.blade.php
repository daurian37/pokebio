@include('layouts.partials.header')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Messagerie</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Messagerie <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<br><br>

<section class="container">

<div class="py-md-5">
 <div class="heading-section ftco-animate mb-3">
                    <span class="subheading">Liste des messages </span>
   </div>

   	@if(isset($_GET['message']) )
						  <div class="alert alert-success" role="alert"> <?= $_GET['message'];?> </div>
						 @endif
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">email</th>
      <th scope="col">sujet</th>
      <th scope="col">message</th>

    </tr>
  </thead>
  <tbody>

    @foreach($contact as $contacts)
    <tr>
      <th scope="row">{{ $contacts->nom }}</th>

      <td>{{ $contacts->email }}</td>
      <td>{{ $contacts->sujet }}</td>
      <td>{{ $contacts->message }}</td>

      <td>
        
        <a href="{{ route('suppressionMessage', ['idContact' => $contacts->idContact]) }}"><button class="btn btn-danger">Supprimer</button></a>
      </td>
    </tr>

    @endforeach
    
  </tbody>
</table>
<br><br><br><br><br>

</section>

@include('layouts.partials.footer')
