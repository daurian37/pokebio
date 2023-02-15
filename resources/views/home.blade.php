@extends('layouts.app')


@extends('layouts.partials.header')

@section('content')

                <div>{{ __('Tableau de bord') }}</div>



  @if(Auth::user()->role == 0)

    @if(isset($_GET['idMenu']))
    
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container-fluid px-0">
                <div class="row justify-content-center d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
            <div class="py-md-5">
                <div class="heading-section ftco-animate mb-5">
                    <span class="subheading">Bon appetit</span>
                    <h2 class="mb-4">Passez votre commande et faites vous livrer</h2>
                  </div>
                <form action="/gcommande" method="post">
                   @csrf

                                    @php
                                        $date = date('Y-m-d');
                                    @endphp
                  <div class="row">

               
                        <input type="hidden" id="idmenu" name="idmenu" value="<?= $_GET['idMenu']?>">
                  
                        <input type="hidden" id="idUsers" name="idUsers" value="<?= Auth::user()->id ?>" >

                        <input type="hidden" id="price" name="price" value="<?= $_GET['price'] ?>" >
                      
                      
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="number" id="Phone" name="phone" value="<?= Auth::user()->phone ?>" class="form-control" placeholder="votre numéro de téléphone">
                      </div>
                    </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Adresse de livraison</label>
                        <input type="text" id="adresse" name="adresse" value="<?= Auth::user()->adresse ?>" class="form-control" placeholder="votre adresse">
                      </div>
                    </div>
                   
                        <input type="hidden" id="date" name="date" value="<?= $date ?>">
                      
                    <div class="col-md-12 mt-3">
                      <div class="form-group">
                        <input type="submit" value="Payer <?= $_GET['price'].'£' ?> et commander" class="btn btn-primary py-3 px-5">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
          </div>
         
        </div>
            </div>
        </section>

  @else

 







@foreach($users as $user)


  <?php

    if($user->email == Auth::user()->email ){
 ?>
 <div class="row">

    <div class="card col-sm-4"  style="margin-right: 30px; margin-bottom: 30px;">
      <div class="card-header">
       <b style="color:green;"> Mon profil </b>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> {{$user->name}} </li>
        <li class="list-group-item"> {{$user->phone}} </li>
        <li class="list-group-item"> {{$user->email}} </li>
        <li class="list-group-item"> {{$user->adresse}} </li>
      </ul>

    </div>

    <div class="card col-sm-6" style="margin-bottom: 30px;">
      <div class="card-header">
       <b style="color:green;"> Modifier le profil </b>
      </div>


        <form method='POST' action='/modificationprofil' novalidate class="row g-3">
                             @csrf

                               @php

                                   $Rand = substr(uniqid('', true), -6);
                                   $date = date('Y-m-d');
                                    $statut=0;
                               @endphp



                                  <div class="form-group col-md-5 {{ $errors->has('nom') ? 'has-error':'' }}">
                                    <label for="nom" class="control-label">Nom</label>
                                    <input name="nom" value="<?= Auth::user()->name ?>" type="text" id="nom" class="form-control" required='required'>

                                    {!! $errors->first('nom','<span class="help-block" style="color:red">:message</span>') !!}

                                </div>



                                  <div class="form-group col-md-5 {{ $errors->has('telephone') ? 'has-error':'' }}">
                                    <label for="telephone" class="control-label">Téléphone</label>
                                    <input name="telephone" value="<?= Auth::user()->phone ?>" type="number" id="telephone" class="form-control" required='required'>
                                    {!! $errors->first('telephone','<span class="help-block" style="color:red">:message</span>') !!}
                                </div>


                                  <div class="form-group col-md-5 {{ $errors->has('email') ? 'has-error':'' }}">
                                    <input name="email" value="<?= Auth::user()->email ?>" type="hidden" id="email" class="form-control" required='required'>
                                    {!! $errors->first('email','<span class="help-block" style="color:red">:message</span>') !!}
                                </div>



                                  <div class="form-group col-md-5 {{ $errors->has('adresse') ? 'has-error':'' }}">
                                    <input name="adresse" value="<?= Auth::user()->adresse ?>" type="text" id="email" class="form-control" required='required'>
                                    {!! $errors->first('adresse','<span class="help-block" style="color:red">:message</span>') !!}
                                </div>



                                <input type="hidden" name="id" id="id" value="<?= Auth::user()->id ?>">

                                                        <?php

                              if(isset($_GET['messageP'])){

                              echo '<div class="alert alert-success" role="alert">'.$_GET['messageP'].'</div>';

                              }

                               ?>


                                       <div class="from-group">

                                              <button type="submit" class="btn btn-success" formovalidate>


                                              Modifier &raquo;

                                              </button>

                                                  </div>
                            </form>


    </div>


    <div class="card col-sm-4" style="margin-right: 30px; margin-bottom: 30px;">
      <div class="card-header">
       <b style="color:green;"> Modifier le mot de passe </b>
      </div>


        <form method='POST' action='/modificationprofil' novalidate class="row g-3">
                             @csrf

                               @php

                                   $Rand = substr(uniqid('', true), -6);
                                   $date = date('Y-m-d');
                                    $statut=0;
                               @endphp




                                  <div class="form-group col-md-5 {{ $errors->has('ancienpassword') ? 'has-error':'' }}">
                                    <label for="telephone" class="control-label">ancien mot de passe</label>
                                    <input name="ancienpassword" type="password" id="ancienpassword" class="form-control" required='required'>
                                    {!! $errors->first('ancienpassword','<span class="help-block" style="color:red">:message</span>') !!}
                                </div>


                                  <div class="form-group col-md-5 {{ $errors->has('nouveaupassword') ? 'has-error':'' }}">
                                    <label for="nouveaupassword" class="control-label">nouveau mot de passe</label>
                                    <input name="nouveaupassword" type="password" id="nouveaupassword" class="form-control" required='required'>
                                    {!! $errors->first('nouveaupassword','<span class="help-block" style="color:red">:message</span>') !!}
                                </div>


                                <input type="hidden" name="id" id="id" value="<?= Auth::user()->id ?>">


                                  <?php

                                  if (isset($_GET['messageErreur'])) {

                                      echo '<div class="alert alert-danger" role="alert">'.$_GET['messageErreur'].'</div>';

                                  }elseif(isset($_GET['message'])){

                                   echo '<div class="alert alert-success" role="alert">'.$_GET['message'].'</div>';

                                  }

                                   ?>

                                       <div class="from-group">

                                              <button type="submit" class="btn btn-success" formovalidate>


                                              Modifier &raquo;

                                              </button>

                                                  </div>
                            </form>



    </div>


     <div class="card col-sm-6">
      <div class="card-header">
       <b style="color:red;"> Supprimer le compte </b>
      </div>


        <form method='POST' action='/modificationprofil' novalidate class="row g-3">
                             @csrf

                               @php

                                   $Rand = substr(uniqid('', true), -6);
                                   $date = date('Y-m-d');
                                    $statut=0;
                               @endphp




                                  <div class="form-group col-md-10 {{ $errors->has('password') ? 'has-error':'' }}">
                                    <label for="telephone" class="control-label">mot de passe</label>
                                    <input name="password" type="password" id="password" class="form-control" required='required'>
                                    {!! $errors->first('password','<span class="help-block" style="color:red">:message</span>') !!}
                                </div>


                                <input type="hidden" name="id" id="id" value="<?= Auth::user()->id ?>">

                                <?php

                                  if (isset($_GET['messageS'])) {

                                    echo '<div class="alert alert-danger" role="alert">'.$_GET['messageS'].'</div>';

                                  }
                                   ?>

                                       <div class="from-group">

                                              <button onclick="return confirm('Voulez vous supprimer ce compte ?')"  type="submit" class="btn btn-danger" formovalidate>


                                              Supprimer &raquo;

                                              </button>

                                                  </div>
                            </form>



    </div>


</div>



    <?php

    }
 ?>

@endforeach



     @endif


                        </div>
                    </div>
                </section>


        </div>
    </div>

<!--/section-->






























  @endif


@endif

@include('layouts.partials.footer')


@endsection

