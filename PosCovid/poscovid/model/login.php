<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) 
{
    header('Location: ../login.html');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT id_usuario FROM usuario WHERE email = '$email' AND senha = $senha;";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1)
{
    $_SESSION['email'] = $email;
    header('Location: ../ficha.php');
    exit();
} else {
    header('Location: ../login.html');
}

?>

