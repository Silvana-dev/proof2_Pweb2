<?php
    include('connection.php');
    include('user.php');
    
    if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
        header('Location: register.html');
        exit();
    }

    $pass = md5($_POST["password"]);
	$user = new Usuario($_POST['name'], $_POST["username"], $_POST["email"], $pass);
    
    $name = $user->getNome();
    $username = $user->getUsuario();
    $email = $user->getEmail();
    $password = $user->getSenha();
    $cont = 0;

    $stmt = $conn->prepare("INSERT INTO `user`(`name`, `username`, `email`, `password`) 
    VALUES (:name, :username, :email, :password)");

    $fetch = "SELECT `username`,`email` FROM `user`";
    $result = $conn->query($fetch);
    while($row = $result->fetch()) {
        if($row['username'] != $username && $row['email'] != $email){
            $cont++;
        }
    }

    if($cont == 0){
        echo "Usuário ou E-mail existentes.";
    }else{
        
        $stmt->bindparam(':name' => $name, ':username' => $username, ':email' => $email, ':password'=> $password);
        $stmt->execute();

        echo "Cadastro realizado.";
        header("Location: registro.html");
    }
?>