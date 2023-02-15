@php

  try
{
    $bdd=new PDO('mysql:host=localhost;dbname=poke','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e)
{
    die('Erreur :' .$e->getMessage());
}

$del = $bdd->prepare('DELETE FROM contact WHERE idContact = ? LIMIT 1');
$del->execute(array($_GET['idContact']));

$message= 'Message supprimé avec succès';


 header('Location: messagerie/?message='.$message );

        exit();

@endphp