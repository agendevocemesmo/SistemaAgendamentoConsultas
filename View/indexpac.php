<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
 session_start();
}

if (!isset ($_SESSION['logado'])) {
   header ("Location: ../index.php");
   
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SisConsul</title>

    <!-- Bootstrap core CSS -->
     <link href="../biblioteca/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">SisConsul</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contate-nos <span class="sr-only">(current)</span></a>
          </li>
         
        </ul>
          <ul class="nav navbar-nav navbar-right">
              <a class="nav-link" href="../logout.php">Sair <span class="sr-only">(current)</span></a>
        
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>SisConsul</h1>
        <?php echo 'Usuário : '.$_SESSION['nome'    ]; ?>
            <body>
                <br>
                <script language="JavaScript">

                document.write("<font color='#000000' size='3' face='arial'>")
                var mydate=new Date()s
                var year=mydate.getYear()
                if (year<2000)
                year += (year < 1900) ? 1900 : 0
                var day=mydate.getDay()
                var month=mydate.getMonth()
                var daym=mydate.getDate()
                if (daym<10)
                daym="0"+daym
                var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
                var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Março de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
                document.write("   "+dayarray[day]+", "+daym+" "+montharray[month]+year+" ")
                document.write("</b></i></font>")
                </script>
                <br>
                <br>
                
                <h2> Olá o que deseja fazer? </h2>
            </body>
      </div>
        <div class="jumbotron mt-1">
       
        
        
        <a class="btn btn-lg btn-success" href="" role="button">Marcar nova consulta   &raquo;</a> <br />
        <br />
       
        <a class="btn btn-lg btn-dark" href="../../components/navbar/" role="button">Ver minha agenda &raquo;</a> <br />
        <br />
            
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
