<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari Professor</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Oxygen:wght@300;400;700&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navegació -->
    <header>
        <nav class="header">
            <h1 class="header__títol">Projecte 1</h1>
        </nav>
    </header>

    <!-- Formulari -->
    <article>
        <h4 class="títol">FORMULARI PROFESSOR</h4>
        <div class="general">
            <div class="subgeneral">
                <form class="formulari" action="professor" method="POST">
                    <label class="formulari__text" for="name" >Nom:</label>
                    <input class="formulari__omplir" type="text" name="name" placeholder="escriu el nom del professor" required>
                    <label class="formulari__text" for="surname">Cognoms: </label>
                    <input class="formulari__omplir" type="text" name="surname" placeholder="escriu els cognoms del professor" required>
                    <label class="formulari__text" for="password">Contrasenya: </label>
                    <input class="formulari__omplir" type="password" name="password" placeholder="escriu la contrasenya" required>
                    <div class="bt">
                        <button class="bt__bt">SEGÜENT</button>
                    </div>
                </form>
            </div>
        </div>
    </article>

    <!-- Footer -->
    <footer class="footer">
        <p class="footer__text">Copyright © 2024 Projecte 1</p>
    </footer>
</body>
</html>