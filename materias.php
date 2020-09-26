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
        $id=$materia->id;
        
        echo "<li>".$materia-> nombre."  __________  "; 
        echo '<button><a href="borrar/'.$materia->id.'"> eliminar</a></button>';
        echo "<form action='updateNombre/$id' method='post'>
        <input type='text' name='nombre' placeholder='inserte nombre materia'>
        <button type='submit'> update</a></button> </form>";
        
        echo "</li>";
    }
    echo "</ul>";

    echo "PROFES";
    echo "<ul>";
    foreach ($materias as $materia) {
        echo "<li>".$materia-> profesor_a . "</li>";
        
        
    }
    echo "</ul>";
}

function deleteMaterias($materia_id){
    $db = new PDO('mysql:host=localhost;' .'dbname=ejercicio4y5;charset=utf8' , 'root', '');
    $sentencia=$db->prepare("DELETE FROM materias WHERE id=?");
    echo "hola";

    $sentencia->execute(array($materia_id));
    header("Location: ".BASE_URL."mostrarMaterias");
}

function updateNombre($materia_id){
    $db = new PDO('mysql:host=localhost;' .'dbname=ejercicio4y5;charset=utf8' , 'root', '');
    $nombre= $_POST['nombre'];
    
    
    $sentencia=$db->prepare("UPDATE materias SET nombre=? WHERE id=?");
    echo "hola";

    $sentencia->execute(array($nombre, $materia_id));
    header("Location: ".BASE_URL."mostrarMaterias");
}



