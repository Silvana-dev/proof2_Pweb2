<?php
    include('connection.php');

    ?>
        <form method="POST" name="form" action="buscar.php">
            <br>
            <label for="search">Pesquisar usuários: </label>
            <input type="text" name="search">
            <br>
            <button type="submit" value="Send">Pesquisar</button>
            <br>
        </form>
    <?php

    echo 'Usuários cadastrados';
    echo '<br/>'; echo '<br/>';

    $sql = $conn->prepare("SELECT `name` FROM `user`");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($result); $i++) { 
        echo "Usuário: ".($i+1)."<br>";
        foreach ($result[$i] as $cont => $value) {
            echo $cont.": ".$value."<br>";
        }
        echo "<br>";
    }
?>
    <button><a href="registro.html">Exit</a></button>
 