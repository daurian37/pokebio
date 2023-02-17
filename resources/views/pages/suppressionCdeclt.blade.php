@php

  try
{
    $bdd=new PDO('mysql:host=localhost;dbname=poke','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e)
{
    die('Erreur :' .$e->getMessage());
}

$del = $bdd->prepare('DELETE FROM commandes WHERE idCde = ? LIMIT 1');
$del->execute(array($_GET['idCde']));


 header('Location: mescommandes');

        exit();

@endphp