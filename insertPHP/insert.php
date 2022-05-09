<?php

include_once 'conexao.php';

if (isset($_POST['nome']) and isset($_POST['data']) and isset($_POST['email']) and isset($_POST['mensagem'])) {

    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO users (user_name, user_email, user_date, user_mensagem, active)
    VALUES ('$nome', '$email', '$data', '$mensagem', 1)";
    
    if (mysqli_query($conn, $sql)) {
        echo "Dados cadastrados com sucesso!";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


?>