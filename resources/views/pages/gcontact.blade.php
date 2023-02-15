@php

  try
{
    $bdd=new PDO('mysql:host=localhost;dbname=poke','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e)
{
    die('Erreur :' .$e->getMessage());
}


$contact= $bdd->prepare('insert into contact (nom,email,sujet,message) values(?,?,?,?)');
$contact->execute(array($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']));

$message= 'Votre message a bien été envoyé';


 header('Location: contact?message='.$message );

        exit();


@endphp