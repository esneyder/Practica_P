<?php
require_once 'Conexion.php'; 
class Persona{

	private $con;
	private $nom;
	private $apell;
	private $cc;
	private $email;

	public function getApell(){
		return $this->apell;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getCc(){
		return $this->cc;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setNom($nomb){
		$this->nom=$nomb;
	}

	public function setApell($apelli){
		$this->apell=$apelli;
	}

	public function setCc($cedu){
		$this->cc=$cedu;
	}
	public function setEmail($ema){
		$this->email=$ema;
	}
	public function __construct(){

	}

	public function crearTabla(){
		$this->con=new Conexion();
		$mensaje;
		$sql="create table if not exists persona(cedula varchar(20) not null,
									nombre varchar(20) not null,
									apellido varchar(20) not null,
									correo varchar(20) not null unique,
								primary key(cedula))";
		$crear=$this->con->query($sql);
		if($crear){
			$mensaje='se ha ejecutado la consulta exitosamente';
		}
		else{
			$mensaje='error al crear la tabla('.mysqli_connect_errno().') '.mysqli_error($this->con);
		}
		$this->con->close();
		return $mensaje;
	}

	public function insertar(Persona $pers){
		$this->con=new Conexion();
		$mensaje;
		$sql="insert into persona values('".$pers->getCc()."','".$pers->getNom().
											"','".$pers->getApell()."','".$pers->getEmail()."')";
		$crear=$this->con->query($sql);
		if($crear){
			$mensaje='se ha insertado el registro exitosamente';
		}
		else{
			$mensaje='error al crear el registro('.mysqli_connect_errno().') '.mysqli_error($this->con);
		}
		$this->con->close();
		return $mensaje;
	}



}


 ?>