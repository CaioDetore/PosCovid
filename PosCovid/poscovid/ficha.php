<?php
include('model/conexao.php');

session_start();
if(!$_SESSION['email']) {
    header('Location: login.html');
    exit();
}

$email = $_SESSION['email'];

$RES=mysqli_query($conn, "select * from usuario where email ='$email'");
$PERFIL=mysqli_fetch_array($RES, MYSQLI_NUM); 

$RES2=mysqli_query($conn, "select * from ficha where usuario_id_usuario ='$PERFIL[0]'");
$FICHA=mysqli_fetch_array($RES2, MYSQLI_NUM); 

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="css/owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/main.css">

    <title>PosCovid - Minha ficha</title>

</head>
<body>
    <!-- COMEÇO HEADER -->
    <header id="header" class="">

            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--preto);">

                <img src="img/logo-nobg2.png" class="image-fluid" height="67">
                <a class="nav-link active" aria-current="page" href="index.html"> <span> PósCovid.com </span> </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
    
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html" title="Clique para saber o que é o covid 19"> Covid: O que é? </a>
                      </li>
      
                      <li class="nav-item">
                        <a class="nav-link" href="index.html">Pós-Covid: O que é</a>
                      </li>
      
                      <li class="nav-item">
                        <a class="nav-link" href="cadastro.html" title="Clique para relatar seus problemas do pós-covid!">Relate Seus Problemas</a>
                      </li>
      
                      <li class="nav-item">
                        <a class="nav-link" href="login.html" title="Possui uma conta? Acesse clicando aqui.">Entrar</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="model/logout.php" title="Para sai de sua conta clique aqui.">Sair</a>
                      </li>

                    </ul>
      
                </div>
            </nav>
    </header>

    <!-- FIM HEADER -->

    <!-- FICHA -->
    <div class="container pt-5">
        <h2 class="title"> Sua ficha pós-covid </h2>
        <h4 class="subtitle"> Ficha de <?php echo "$PERFIL[1] $PERFIL[2]."; ?> </h4>

        <div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col"><h4>Sintomas</h4></th>
                    <th scope="col"><h4>Possui</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Fadiga</th>
                    <td><?php if ($FICHA[2] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Falta de ar</th>
                    <td><?php if ($FICHA[3] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Dor de cabeça</th>
                    <td><?php if ($FICHA[4] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Dor muscular</th>
                    <td><?php if ($FICHA[5] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Queda de cabelo</th>
                    <td><?php if ($FICHA[6] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Perda de paladar e olfato</th>
                    <td><?php if ($FICHA[7] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Dor no peito</th>
                    <td><?php if ($FICHA[8] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Tontura</th>
                    <td><?php if ($FICHA[9] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Tromboses</th>
                    <td><?php if ($FICHA[10] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Palpitação</th>
                    <td><?php if ($FICHA[11] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Depressão e ansiedade</th>
                    <td><?php if ($FICHA[12] == 0){ echo "Não"; } else { echo "Sim"; }; ?></td>
                    </tr>
                </tbody>
            </table>
            <h4 class="title pt-3">Outros sintomas ou informações relevantes:</h4>
            <p> <?php echo $FICHA[13] ?> </p>
        </div>
    </div>

    <!-- FIM FICHA -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>



