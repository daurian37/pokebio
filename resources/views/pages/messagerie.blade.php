@include('layouts.partials.header')


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
