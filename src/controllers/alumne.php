<?php
session_start(); 
if (!empty($_SESSION['respostes'])) {
    $_SESSION['respostes'] = [];
}

// Recollir dades
if (!empty($_POST['name']) && !empty($_POST['course']) && !empty($_POST['subject'])) {
    $name = filter_input(INPUT_POST, 'name');
    $course = filter_input(INPUT_POST, 'course');
    $subject = filter_input(INPUT_POST, 'subject');

    // Guardar les dades
    $_SESSION['respostes']['name'] = $name;
    $_SESSION['respostes']['course'] = $course;
    $_SESSION['respostes']['subject'] = $subject;

    header('Location: guardaralumne'); 
}
?>