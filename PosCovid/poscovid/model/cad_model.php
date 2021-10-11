<?php

    include_once("conexao.php");

    //DADOS DO FORM - USUARIO
    $nome_usuario = mysqli_real_escape_string($conn, $_POST["nome_usuario"]);
    $sobrenome_usuario = mysqli_real_escape_string($conn, $_POST["sobrenome_usuario"]);
    $data_nascimento = mysqli_real_escape_string($conn, $_POST["data_nascimento"]);
    $cidade = mysqli_real_escape_string($conn, $_POST["cidade"]);
    $estado = mysqli_real_escape_string($conn, $_POST["estado"]);
    $celular = mysqli_real_escape_string($conn, $_POST["celular"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]); 
    $senha = mysqli_real_escape_string($conn, $_POST["senha"]);

    //FICHA 
    $fadiga = mysqli_real_escape_string($conn, $_POST["fadiga"]);
    $falta_de_ar = mysqli_real_escape_string($conn, $_POST["falta_de_ar"]);
    $dor_cabeca = mysqli_real_escape_string($conn, $_POST["dor_cabeca"]);
    $dor_muscular = mysqli_real_escape_string($conn, $_POST["dor_muscular"]);
    $queda_cabelo = mysqli_real_escape_string($conn, $_POST["queda_cabelo"]);
    $paladar_olfato = mysqli_real_escape_string($conn, $_POST["paladar_olfato"]);
    $dor_peito = mysqli_real_escape_string($conn, $_POST["dor_peito"]);
    $tontura = mysqli_real_escape_string($conn, $_POST["tontura"]);
    $tromboses = mysqli_real_escape_string($conn, $_POST["tromboses"]);
    $palpitacao = mysqli_real_escape_string($conn, $_POST["palpitacao"]);
    $depressao_ansiedade = mysqli_real_escape_string($conn, $_POST["depressao_ansiedade"]);
    $outros = mysqli_real_escape_string($conn, $_POST["outros"]);

    //MANIPULAÇÃO DAS DATAS
    $data_cadastro = date('Y/m/d');

    //QUERY USUARIO
    $query = "INSERT INTO usuario(nome_usuario, sobrenome_usuario, data_nascimento, cidade, estado, celular, email, senha, data_cadastro ) VALUES ('$nome_usuario', '$sobrenome_usuario', '$data_nascimento', '$cidade', '$estado', $celular, '$email', $senha, '$data_cadastro')";

    // INSERÇÃO DA QUERY NO BD
    if(!mysqli_query($conn, $query))
    {
        die("<br>Falha na Inserção dos Dados = $query -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    }

    // PEGAR ID
    $id = mysqli_insert_id($conn);

    // QUERY FICHA
    $query2 = "INSERT INTO ficha(usuario_id_usuario, fadiga, falta_de_ar, dor_cabeca, dor_muscular, queda_cabelo, paladar_olfato, dor_peito, tontura, tromboses, palpitacao, depressao_ansiedade, outros, data_cadastro) VALUES ($id, $fadiga, $falta_de_ar, $dor_cabeca, $dor_muscular, $queda_cabelo, $paladar_olfato, $dor_peito, $tontura, $tromboses, $palpitacao, $depressao_ansiedade, '$outros', '$data_cadastro')";

    // mandar o mysqli inserir essa query no banco relacionamento
    if(!mysqli_query($conn, $query2))
    {
        die("<br>Falha na Inserção dos Dados = $query2 -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    }

    //ir pra outra pagina 
    header('location: ../ficha.php'); 

    // Fechar a conexão com o banco
    mysqli_close($conn);

?>