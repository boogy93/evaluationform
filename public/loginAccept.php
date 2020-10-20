<?php

session_start();
if ( $_POST['password']!= 'admin' )
{
header('Location: login.php');
echo'ok';
exit();
}else {
    echo "Mauvais mot de passe";
} 

echo 'Veuillez resaisir vos identifiant <br>'; 
if ( $_POST['username']!= 'admin@admin.fr' )
{
header('Location: login.php');
echo'ok';
?>