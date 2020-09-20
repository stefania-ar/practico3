<?php
 


function a3 (){
    $sentencia = $db->prepare( "select * from task");

    $sentencia->execute();
    $tasks = $sentencia-> fetchAll(PDO::FETCH_OBJ);


}


//var_dump($tasks);

//EJERCICIO 3 b
function mostrarTareas(){
    $db = new PDO('mysql:host=localhost;' .'dbname=tasks;charset=utf8' , 'root', '');
    $sentencia = $db->prepare( "select * from task");

    $sentencia->execute();
    $tasks = $sentencia-> fetchAll(PDO::FETCH_OBJ);
    echo "TAREAS";
    echo "<ul>";
    foreach ($tasks as $task) {
        
        
        echo "<li>". $task -> title . "</li>";
        
    };
    echo "</ul>";
}


//EJERCICIO 3 c
function nousar(){
    $sentencia = $db->prepare("INSERT INTO task(title, description, completed, priority) VALUES ('primero', null, 1, 35)");

    $sentencia ->execute();
}

function insert(){
    $db = new PDO('mysql:host=localhost;' .'dbname=tasks;charset=utf8' , 'root', '');
    $sentencia = $db->prepare("INSERT INTO task(title, description, completed, priority) VALUES (?, ?, ?, ?)");
    $sentencia ->execute(array($_POST['title'],$_POST['description'],$_POST['compl'],$_POST['priority']));
    

}

?>




