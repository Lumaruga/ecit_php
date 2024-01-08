<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nome: <input type="text" name="nome">
        <input type="submit">
    </form>
    
    <?php
        echo"UTILIZZO DATI INSERITI DALL'UTENTE<br>";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        echo "Nome: $nome <br>";
        }

        echo"CICLO CHE STAMPA I NUMERI DA 0 A 10<br>";
        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }
        
        echo"ARRAY ASSOCIATIVO<br>";
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