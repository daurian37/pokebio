@php

  try
{
    $bdd=new PDO('mysql:host=localhost;dbname=poke','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e)
{
    die('Erreur :' .$e->getMessage());
}


$commande= $bdd->prepare('insert into commandes (idUsers,phone,adresse,dateCde,idMenu,price) values(?,?,?,?,?,?)');
$commande->execute(array($_POST['idUsers'],$_POST['phone'],$_POST['adresse'],$_POST['date'],$_POST['idmenu'],$_POST['price']));

$message= 'Votre commande est encours de préparation, elle vous sera livrée dans quelques minutes';


 header('Location: http://127.0.0.1:8000/?message='.$message );

        exit();


@endphp