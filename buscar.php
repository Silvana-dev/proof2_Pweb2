<?php
    include('connection.php');

    if(empty($_POST['search'])){
        header('Location: lista.php');
        exit();
    }

    $search = $_POST['search'];

    $stmt = $conn->prepare("SELECT `username` FROM `user` WHERE `username` = :user");

    $stmt->bindparam(":user", $search);
    $stmt->execute();

    if($stmt->rowCount() == 0){
        echo "Usuário não encontrado.<br>";
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Usuário: <br>";
        foreach ($result as $cont => $value) {
            echo $cont.": ".$value."<br>";
        }
        echo "<br>";
    }
    
    ?>
        <button><a href="lista.php">Voltar</a></button>
 