<?php

session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email'])== true)and (!isset($_SESSION['senha'])==true))
{

    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location: projeto_acex_login.php ');
}




$logado = $_SESSION['email'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Projeto acex</title>
    <link rel="stylesheet" href="estilo_003.css">
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
     <a href="projeto_acex_login.php">
      <div id="nav1"><center><h4>Login</h4></center></div></a> 
      
      <a href="projeto_acex_curso.php">
      <div id="nav2"><h4>Trilha de apredizagem</h4></div></a>
      
      <a href="projeto_acex_login.php">
      <div id="nav3"><h4>Sair</h4></div></a>

     <!-------------------------------- FIM BARRA SUPERIOR(BUSCAR,LOGIN,TRILHA E FAQ)------------------------------------>


    
    
     <!--------------------------------CONTAINER GERAL------------------------------------------------------------------>


    <!----------------------------------BANDEIRA LGBT------------------------------------------------------------------>
   
    <div id="main"> <center>

   <a href="curso.html"> <div class="titulo1"><h1>Lógica </h1></div><br><br>
      <img src="Projeto/imagem/logica" alt="" width="400px">  </a>



        

       
        
             
             
                
            
       <!-- <div class="form-group row">
          <div class="col-sm-10">
            <button type="button" class="btn btn-primary btn-lg">Entrar</button>
          </div>
        </div>
      </form></center>-->
      
     



      
       
    </div>

    

    
    
    


        <!----------------------------------FIM BANDEIRA LGBT------------------------------------------------------------------>




    <div id="main1">

     <a href="curso.html"> <div class="titulo"><h1>computacional</h1></div><br><br> </a>
        
      <br><br> <div class="imgrelogio">  <img src="Projeto/imagem/icons8-last-24-hours-64.png" alt="relogio"   > </div><br>
       
       <a href="curso.html"><div class="lapis"><img src="Projeto/imagem/icons8-pencil-64.png" alt="lapis"></div></a>
       <br>
      
        
        <div class="texto"><p>Nessa trilha você será capaz desenvolver habilidades <br>como raciocínio lógico, pensamento computacional e <br>estrutura de linguagens de programação.</p></div>
      
    
      </div>
    

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

    
     <div   id="conteudoTexto"> 
    
    </div> 

    

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
