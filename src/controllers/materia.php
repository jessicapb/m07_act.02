<?php
session_start(); 
if (!empty($_SESSION['respostes'])) {
    $_SESSION['respostes'] = [];
}

// Recollir dades
if (!empty($_POST['name']) && !empty($_POST['teacher']) && !empty($_POST['hours'])) {
    $name = filter_input(INPUT_POST, 'name');
    $teacher = filter_input(INPUT_POST, 'teacher');
    $hours = filter_input(INPUT_POST, 'hours');

    // Guardar les dades
    $_SESSION['respostes']['name'] = $name;
    $_SESSION['respostes']['teacher'] = $teacher;
    $_SESSION['respostes']['hours'] = $hours;

    header('Location: guardarmateries'); 
}
?>