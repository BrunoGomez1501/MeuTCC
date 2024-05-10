<?php

// session_start();

// $usuario = "";
// $senha = "";
// $erro = "";

// include("funcoes.php");

// if(isset($_POST["acessar"])){
//     $usuario = $_POST["usuario"];
//     $senha = $_POST["senha"];
//     $origem = "pagina1";
    
//     $sql ="SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
//     $resultado = $conexao->query($sql);
//     while($linha = mysqli_fetch_array($resultado)){
//         $usuario = $linha["usuario"];
//         $senha = $linha["senha"];
//         $_SESSION["nomeUsuario"] = $usuario;

//         header("location:adm_video.php");
//         exit;
        
       
//     }
// }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
  <div class="login">
    <div class = "boxLogin rounded">
      <div class="titulo">
        <h1 class = "d-flex justify-content-center"><img src="https://img.icons8.com/material-sharp/48/000000/wooden-floor.png"/>Login Administrativo</h1>
      </div>
      <form action="" class = "form-group m-3">
        <div class="form-group col-md-12">
          <label for="exampleInputEmail1"><i><i>Usuario:</label>
          <input type="text" class="form-control input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group col-md-12">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control input" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary col-md-12 mt-3">Entrar</button>
      </form>
    </div>
  </div>
</body>
</html>