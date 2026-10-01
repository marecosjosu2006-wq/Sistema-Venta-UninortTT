<?php


class conectar {

    protected $dbh;

    public function Conexion(){

    try{

        $this->dbh = new PDO("mysql:host=localhost;dbname=ventas;charset=utf8","root","",
        
        [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

        );


<<<<<<< HEAD
        //echo "Conexion exitosa a la base de datos";
=======
        echo "Conexion exitosa a la base de datos";
>>>>>>> d04f68615c4a3637496fa38b645e0076864c9e31
        return $this->dbh;

    } catch (PDOExeption $e){

    echo "Error BD: ". $e->getMensaje();
        die();

    }

    }
    public function set_name (){
        return $this-> dbh->query ("SET NAMES 'utf8'");
    }
}
$conexion=new Conectar();
$conexion ->Conexion();



?>