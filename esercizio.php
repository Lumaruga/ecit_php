<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ese</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome: <input type="text" name="nome">
        <input type="submit">
    </form>
    
    <?php
        echo "<h2>UTILIZZO DATI INSERITI DALL'UTENTE<br></h2>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            if (preg_match("/^[a-zA-Z]+$/", $nome)) {
                echo "<p>". "Nome: $nome <br>". "</p>";
            } else {
                $error = "ERRORE: Il nome deve contenere solo lettere dell'alfabeto.";
                echo "<p>". $error. "</p>" ;
            }
        }

        echo "<h2>CICLO CHE STAMPA I NUMERI DA 0 A 10<br></h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>". $i . " ". "</p>";
        }
        
        echo "<h2>ARRAY ASSOCIATIVO<br></h2>";
        $array = [
            'nome' => 'Mario', 
            'cognome' => 'Verdi', 
            'eta' => '25', 
            'lavoro' => 'Programmatore'
        ];
        
        echo "<p>". $array['nome']."\n". "</p>";
        echo "<p>". $array['lavoro']. "</p>";
    ?>
</body>
</html>
