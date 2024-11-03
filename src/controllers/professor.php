<?php
session_start(); 

if (!empty($_SESSION['respostes'])) {
    $_SESSION['respostes'] = [];
}

//Recollir dades
if(!empty($_POST['name'])&& !empty($_POST['surname']) && !empty($_POST['password'])){
    $name=filter_input(INPUT_POST,'name');
    $surname=filter_input(INPUT_POST,'surname');
    $password=filter_input(INPUT_POST,'password');

    //Guardar les dades
    $_SESSION['respostes']['name'] = $_POST['name'];
    $_SESSION['respostes']['surname'] = $_POST['surname'];
    $_SESSION['respostes']['password'] = $_POST['password'];

    header('Location: guardarprofessor');
}
?>