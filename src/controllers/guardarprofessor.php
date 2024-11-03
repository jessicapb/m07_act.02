<?php
session_start();

if (!empty($_SESSION['respostes'])) {
    $respostes = $_SESSION['respostes'];
    $contingut = "Nom: " . $respostes['name'] . "\n";
    $contingut .= "Cognoms: " . $respostes['surname'] . "\n";
    $contingut .= "Contrassenya: " . $respostes['password'] . "\n";

    //Guardar en un arxiu
    $arxiu = 'respostes.txt';
    file_put_contents($arxiu, $contingut, FILE_APPEND);  
    
    session_destroy();
    header('Location: alum');
} else {
    echo "No hi ha dades.";
}
?>