<?php
if(isset($POST_['submit'])){


  /*  print_r('Nome:' . $POST['nome']);
    print_r('Email:' . $POST['email']);
    print_r('Nascimento:' . $POST['nascimento']);*/

    include_once('config.php');

    $nome = $POST['nome'];
    $email =  $POST['email'];
    $nascimento = $POST['nascimento'];

    $result= mysqli_query ($conexao, "INSERT INTO usuarios (nome, email, nascimento)VALUES('$nome', '$email', '$nascimento')");

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
   <a href="projeto_acex_login.html"> <div id="nav1"><center><h4>Login</h4></center></div></a>
    <a href="projeto_acex_curso.html"><div id="nav2"><h4>Trilha de apredizagem</h4></div></a>
   <a href="#"> <div id="nav3"><h4>Faq</h4></div></a>

     <!-------------------------------- FIM BARRA SUPERIOR(BUSCAR,LOGIN,TRILHA E FAQ)------------------------------------>


    
    
     <!--------------------------------CONTAINER GERAL------------------------------------------------------------------>


    <!----------------------------------BANDEIRA LGBT------------------------------------------------------------------>
   
    <div id="main"> <center>

    <br><br><h1>Bem Vind@</h1> <br><br><br>
    
        <form  action="projeto_acex_formulario.php">
        <div class="usuario">
          <label for="nome" class="col-sm-2 col-form-label"><h4></h4> </label>
          <div class="usuario1">
              <input type="text" class="usuario01" id="nome"  placeholder="Nome Completo" >
          </div>
        </div>
        
        
        <div class="senha">
          <label for="email" class="col-sm-2 col-form-label"><h4></h4></label>
          <div class="senha1">
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
        </div>


        <div class="senha">
            <label for="nascimento" class="col-sm-2 col-form-label"><h4></h4></label>
            <div class="senha1">
              <input type="text" class="form-control" id="nascimento" placeholder="Data Nascimento">
            </div>
          </div>

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

      <a href="index.html"> <center><img src="Projeto/imagem/icons8-home-50.png" alt="home" width="35px" height="35px"></center></a>
   
         <a href="projeto_acex_login.html">
           <center>  <img src="Projeto/imagem/icons8-user-50.png" alt="usuario" width="35px" height="35px" ></center><br></a>
       
          <a href="projeto_acex_curso.html"> <center>  <img src="Projeto/imagem/icons8-open-book-50.png" alt="livro" width="35px" height="35px" ></center><br></a>
   
          <a href="#"> <center>  <img src="Projeto/imagem/icons8-plus-math-30.png" alt="mais" width="35px" height="35px" ></center><br></a>
   
           <br><br><br>
   
           <a href="#"><center>  <img src="Projeto/imagem/icons8-camera-50.png" alt="camera" width="35px" height="35px" ></center><br></a>
   
           <a href="#"><center>  <img src="Projeto/imagem/icons8-email-50 (1).png" alt="email" width="35px" height="35px" ></center><br></a>
   
           <a href="#"><center>  <img src="Projeto/imagem/icons8-phone-50.png" alt="telefone" width="35px" height="35px" ></center></a>
   
   
   
   
   
           
   
        </div>

     <!------------------------------------FIM BARRA LATERAL---------------------------------------------------->

    
  <!------------------------------------------ TITULO CURSO---------------------------------------------------->

    
     <div   id="conteudoTexto"><center> <button type="button" class="btn ">Cadastrar</button></center>
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
