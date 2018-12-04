<?php
/**
 *  
 */

?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
require "../templates/footer.php";
?>

    <header>
        <img id="logo" src="images/NTI Gymnasiet_Södertälje_Digital_svart.png" alt="NTI-logga" />
        <form action="" id="loginform">
            <input type="text"><button>Logga in!</button><a href="signup.html">Registrera dig</a>
        </form>
        <h1>Spelsajten</h1>
    </header>
    <nav>
        <ul>
            <li><a href="game.html">Spel</a></li>
            <li><a href="about.html">Om sidan</a></li>
        </ul>
    </nav>
    <main>
        <p>Välkommen till spelsajten!</p>
    </main>
    <footer>
        <small> ©2018 Tobias Lindberg, NTI Gymnasiet Södertälje</small>
    </footer>    
</body>
</html>