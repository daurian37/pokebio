@include('layouts.partials.header')
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Mes commandes</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Mes commandes <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<br><br>

<section class="container">

<div class="py-md-5">
 <div class="heading-section ftco-animate mb-3">
                    <span class="subheading">Liste des commandes effectuées </span>
   </div>

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">repas commandé</th>
      <th scope="col">prix</th>
      <th scope="col">date de la commande</th>
      <th scope="col">action</th>

    </tr>
  </thead>
  <tbody>

    @foreach($commandes as $commande)

    @if($commande->idUsers == Auth::user()->id)
    <tr>
       @foreach($menu as $menus)
       @if($menus->idMenu == $commande->idMenu)
      <th scope="row">{{ $menus->name}}</th>
      @endif
      @endforeach

      <td>{{ $commande->price }} £</td>
      <td>{{ $commande->dateCde}}</td>

      <td>
        
        <a href="{{ route('suppressionCdeclt', ['idCde' => $commande->idCde]) }}"><button class="btn btn-danger">Supprimer</button></a>
      </td>
    </tr>

      @endif
    @endforeach
    
  </tbody>
</table>
<br><br><br><br><br>

</section>

@include('layouts.partials.footer')
