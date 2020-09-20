<?php

require_once 'vacio.php';

function insertMateria(){
    $db = new PDO('mysql:host=localhost;' .'dbname=ejercicio4y5;charset=utf8' , 'root', '');

    $sentencia=$db->prepare(" INSERT INTO materias(nombre, profesor_a) VALUES (?, ?)");
    if(null != ($_POST['nombreMateria'])){
        $sentencia-> execute(array($_POST['nombreMateria'],$_POST['profesora']));
    }else enCasoVacio();
    
}
function mostrarMaterias(){
    $db = new PDO('mysql:host=localhost;' .'dbname=ejercicio4y5;charset=utf8' , 'root', '');
    $sentencia= $db->prepare("SELECT * FROM materias");
    $sentencia->execute();

    $materias=$sentencia-> fetchAll(PDO::FETCH_OBJ);

    echo "MATERIAS";
    echo "<ul>";
    foreach ($materias as $materia) {
        echo "<li>".$materia-> nombre . "</li>";
        echo "<button>"."eliminar"."</button>";
    }
    echo "</ul>";

    echo "PROFES";
    echo "<ul>";
    foreach ($materias as $materia) {
        echo "<li>".$materia-> profesor_a . "</li>";
        
        
    }
    echo "</ul>";
}

function deleteMaterias(){
    $db = new PDO('mysql:host=localhost;' .'dbname=ejercicio4y5;charset=utf8' , 'root', '');
    $sentencia=$db->prepare("DELETE FROM materias WHERE ");
}



