<?php
if(isset($_POST['submit'])){


 //  print_r( $_POST['nome']);
   // print_r($_POST['email']);
    //print_r( $_POST['genero']);


    include_once('config.php');

    $nome = $_POST['nome'];
    $email =  $_POST['email'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];

    $result= mysqli_query ($conexao, "INSERT INTO usuarios (nome, email, genero, senha)VALUES('$nome', '$email', '$genero', '$senha')");

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Projeto acex</title>
   <link rel="stylesheet" href="estilo_formulario.css">
</head>
<body>
 
    <!--------------------------------CONTAINER GERAL------------------------------------------------------------------>
<div class="container">
    
    
        <!--------------------------------BARRA SUPERIOR(BUSCAR,LOGIN,TRILHA E FAQ)------------------------------------------------------------------>
        <div id="nav">
        
          <!--<nav class="navbar navbar-light bg-light">
              <nav class="navbar navbar-light bg-light">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><center>
                      <img src="Projeto/imagem/lupa (1).png" alt="lupa" width="10px" height="10px"></button></center>
                  </form>
                </nav>
        </nav> -->
  
        <input type="text" class="search-txt" placeholder="Buscar" >
        <a href="#" class="scart-btn">
  
          <img src="Projeto/imagem/icons8-magnifying-glass-50.png" alt="lupa" width="40px" height="40px">
        </a>
        </div>
   <a href="projeto_acex_login.php"> <div id="nav1"><center><h4>Login</h4></center></div></a>
    <a href="projeto_acex_curso.php"><div id="nav2"><h4>Trilha de apredizagem</h4></div></a>
   <a href="projeto_acex_login.php"> <div id="nav3"><h4>Sair</h4></div></a> 

     <!-------------------------------- FIM BARRA SUPERIOR(BUSCAR,LOGIN,TRILHA E FAQ)------------------------------------>


    
    
     <!--------------------------------CONTAINER GERAL------------------------------------------------------------------>


    <!----------------------------------BANDEIRA LGBT------------------------------------------------------------------>
   
    <div id="main"> <center>

    <br><br><h1>Bem Vind@</h1> <br>
    
        <form  action="formulario.php" method = "POST">
        <div class="usuario">
          <label for="nome" class="col-sm-2 col-form-label"><h4></h4> </label>
          <div class="usuario1">
              <input type="text" name="nome" class="usuario01" id="nome"  placeholder="Nome Completo" >
          </div>
        </div>
        
        
        <div class="senha">
          <label for="email" class="col-sm-2 col-form-label"><h4></h4></label>
          <div class="senha1">
            <input type="email"name="email" class="form-control" id="email" placeholder="Email">
          </div>
        </div>

        
        <div class="senha">
          <label for="senha" class="col-sm-2 col-form-label"><h4></h4></label>
          <div class="senha1">
            <input type="password"name="senha" class="form-control" id="senha" placeholder="Senha">
          </div>
        </div>




        <div class="senha">
            <label for="genero class="col-sm-2 col-form-label"><h4></h4></label>
            <div class="senha1">
              <input type="text" name="genero" class="form-control" id="genero" placeholder="Genero">
            </div>
          </div><br><br>

          <input type="submit" name="submit" id="sunmit">
          



        

       
        
             
             
                
            
       <!-- <div class="form-group row">
          <div class="col-sm-10">
            <button type="button" class="btn btn-primary btn-lg">Entrar</button>
          </div>
        </div>
      </form></center>-->
      
     



      
       
    </div>

    

    
    
    


        <!----------------------------------FIM BANDEIRA LGBT------------------------------------------------------------------>




    <div id="main1"> </div>
    

     <!--------------------------------------BARRA LATERAL-------------------------------------------------->
     <div id="sidebar"> <br><br>

     <a href="index.html"> <center><img src="Projeto/imagem/icons8-home-50.png" alt="home" width="35px" height="35px"></center></a><br><br>

<a href="projeto_acex_login.php">
  <center>  <img src="Projeto/imagem/icons8-user-50.png" alt="usuario" width="35px" height="35px" ></center><br></a><br><br>

 <a href="projeto_acex_curso.php"> <center>  <img src="Projeto/imagem/icons8-open-book-50.png" alt="livro" width="35px" height="35px" ></center><br></a><br><br>

 <a href="formulario.php"> <center>  <img src="Projeto/imagem/formulario.png" alt="formulario" width="35px" height="35px" ></center><br></a>

  <br><br><br>

  <a href="projeto_acex_login.php"><center>  <img src="Projeto/imagem/porta.png" alt="porta" width="35px" height="35px" ></center><br></a>
   
   
   
   
   
           
   
        </div>

     <!------------------------------------FIM BARRA LATERAL---------------------------------------------------->

    
  <!------------------------------------------ TITULO CURSO---------------------------------------------------->

    
    <!--<div   id="conteudoTexto"><center> <button type="button" class="btn ">Cadastrar</button></center>
     </div> -->

    

  <!------------------------------------------FIM TITULO CURSO---------------------------------------------------->


 <!----------------------------------------------IMAGENS CURSOS E SEUS TITULOS---------------------------------------->
 
 <div 
    
        id="conteudo1">
        
       
    </div>


    <div id="conteudo2">    
       
    </div>
   
   
   
    <div id="conteudo3">
        
        
        </div>
    

   
        
        
    <div id="conteudo4"> 
        
    </div>



    


</div>

<!-------------------------------------------FIM DA CONTAINER----------------------------------------------------------->


</body>
</html>
