@include('layouts.partials.header')


    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
              <p>
              <img src="images/<?= $_GET['image'] ?>" alt="" class="img-fluid">
            </p>
            
            <h2 class="mb-3"><?= $_GET['name'] ?></h2>
            <p>5 raisons de manger des Poke Bowls

Les Poke Bowls sont le plat idéal pour déguster vos sushis préférés facilement et rapidement. Ils permettent d'apporter beaucoup de nutriments et de protéines dans un repas rapide et facile. C'est un plat essentiel pour une alimentation healthy, saine, bio mais surtout succulente !

Les Poke Bowls sont remplis d'apports nutritionnels 

Les Poké Bowls regorgent d'ingrédients sains, tels que concombres, radis, algues, carottes, radis, patates douces, avocats et légumes frais riches en vitamines et en antioxydants. Les antioxydants éliminent les radicaux libres qui peuvent endommager les cellules, et ont des propriétés de prévention des maladies et de lutte contre le vieillissement.

Les Poke Bowls sont très bénéfiques pour la santé 

On recommande de consommer du poisson riche en acides gras oméga-3 au moins deux fois par semaine. Dans une analyse de 20 études, le Journal of the American Medical Association a constaté que deux portions de poisson par semaine réduisaient le risque de maladie cardiaque de 36 %.

Le saumon, en particulier, est riche en acides gras oméga-3 et est fréquemment utilisé dans les poke bowls.

Les Poke Bowls sont peu coûteux 

Les Poke Bowls coûtent moins cher que les rouleaux de sushi plus sophistiqués. Vous pouvez déguster du poisson frais, des légumes croquants et des assaisonnements savoureux pour bien moins cher que les futomaki ou les rouleaux de spécialité.
 
Les Poke Bowls sont parfaits pour un déjeuner rapide 

Vous êtes pressé par le déjeuner et vous avez besoin de manger quelque chose de rapide et de sain ? Les Poké Bowls sont beaucoup plus faciles à assembler que les rouleaux de sushi ! Comme ils ne doivent pas être roulés mais contiennent les mêmes ingrédients sous forme de salade, le chef peut les préparer à temps pour votre pause déjeuner.

Les bols de Poke contiennnent de généreuses portions de poisson et de légumes

Les Poké Bowls contiennent souvent plus de poisson et de légumes et moins de riz que les rouleaux de sushi. Cela rend l'option poke plus rassasiante et satisfaisante, augmente les avantages nutritionnels et fait du poke un excellent rapport qualité-prix</p>  

          
</div> 
</div>
</div>
</section>           

@include('layouts.partials.footer')