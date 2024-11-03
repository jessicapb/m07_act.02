<?php
session_start();

if (!empty($_SESSION['respostes'])) {
    $respostes = $_SESSION['respostes'];
    $contingut = "Nom: " . $respostes['name'] . "\n";
    $contingut .= "Professor: " . $respostes['teacher'] . "\n";
    $contingut .= "Hores: " . $respostes['hours'] . "\n";

    //Guardar en un arxiu
    $arxiu = 'respostes.txt';
    file_put_contents($arxiu, $contingut, FILE_APPEND);  
    
    session_destroy();
    header('Location: prof');
} else {
    echo "No hi ha dades.";
}
?>