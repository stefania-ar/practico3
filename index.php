
<?php
 require_once "base.php";


 function home (){
    $title = "Lista de tareas";
 
?>


<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php  echo $title ?></title>
    </head>
    <body>
        <p>Este es el form de las tareas</p>
   
                    <form action="insert" method="post">
                    <input type="text" name="title" placeholder="inserte titulo">
                        <input type="text" name="description" placeholder="inserte description, opcional">
                        <input type="number" name="compl" placeholder="inserte cpmlete">
                        <input type="number" name="priority" placeholder="inserte priority">
                        <button type="submit">send</button>
                    </form>
        <p>Este es el form de las materias</p>
        <form action="insertMateria" method="post">
                    <input type="text" name="nombreMateria" placeholder="inserte nombre materia ">
                        <input type="text" name="profesora" placeholder="inserte quien esta a cargo">
                        <button type="submit">send</button>
                    </form>

    </body>
  </html>
            
            <?php } ?>




