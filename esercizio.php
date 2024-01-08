<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome: <input type="text" name="nome">
        <input type="submit">
    </form>
    
    <?php
        echo"<h2>UTILIZZO DATI INSERITI DALL'UTENTE<br></h2>";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        echo "Nome: $nome <br>";
        }

        echo"<h2>CICLO CHE STAMPA I NUMERI DA 0 A 10<br></h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }
        
        echo"<h2>ARRAY ASSOCIATIVO<br></h2>";
        $array = [
            'nome' => 'Mario', 
            'cognome' => 'Verdi', 
            'eta' => '25', 
            'lavoro' => 'Programmatore'
        ];
        
        echo $array['nome']."\n";
        echo "$array[lavoro]";
    ?>
</body>
</html>