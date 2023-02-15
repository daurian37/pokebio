@php

$date = date('Y-m-d');

  try
{
    $bdd=new PDO('mysql:host=localhost;dbname=poke','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e)
{
    die('Erreur :' .$e->getMessage());
}


if(isset($_POST['nom'],$_POST['adresse'],$_POST['telephone'],$_POST['email'],$_POST['id'])){

$add = $bdd->prepare('UPDATE users set name=?,adresse=?,phone=?,email=? where id= ?');

$add->execute(array($_POST['nom'],$_POST['adresse'],$_POST['telephone'],$_POST['email'],$_POST['id']));


 $message = 'Profil modifié avec succès';

    header('Location: home?messageP='.$message);
        exit();

}


if(isset($_POST['nouveaupassword'],$_POST['ancienpassword'],$_POST['id'])){

$select = $bdd->prepare('SELECT * FROM users where id=?');

$select->execute(array($_POST['id']));

$users = $select->fetch();


if(Hash::check($_POST['ancienpassword'], $users['password'])){
  
$add = $bdd->prepare('UPDATE users set password=? where id= ?');

$add->execute(array(Hash::make($_POST['nouveaupassword']),$_POST['id']));

    $message = 'Mot de passe modifié avec succès';

    header('Location: home?message='.$message);
        exit();

 }else{ 

    $messageErreur = 'Ancien mot de passe incorrect';

    header('Location: home?messageErreur='.$messageErreur);
        exit();

        }

}



if(isset($_POST['nom'],$_POST['adresse'],$_POST['telephone'],$_POST['email'],$_POST['id'])){

$add = $bdd->prepare('UPDATE users set name=?,adresse=?,phone=?,email=? where id= ?');

$add->execute(array($_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['email'],$_POST['id']));


 $message = 'Profil modifié avec succès';

    header('Location: home?messageP='.$message);
        exit();

}


if(isset($_POST['password'],$_POST['id'])){

$select = $bdd->prepare('SELECT * FROM users where id=?');

$select->execute(array($_POST['id']));

$users = $select->fetch();


if(Hash::check($_POST['password'], $users['password'])){
  
$add = $bdd->prepare('UPDATE users set email=? where id= ?');

$add->execute(array(null,$_POST['id']));

    $messageS = 'Compte supprimé avec succès';

    header('Location: logout?message='.$messageS);
        exit();

 }else{ 

    $messageS = 'mot de passe incorrect';

    header('Location: home?messageS='.$messageS);
        exit();
}
        }

@endphp


