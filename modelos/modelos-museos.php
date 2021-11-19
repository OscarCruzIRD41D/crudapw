<?php require_once 'Conexion.php';

class usuario 
{
	//Atributos=Variables
	public $id_museos;
	public $nombre;
	public $op1;	
	public $op2;
	public $op3;
	private $conexion;
	
    
	//Constructor
	public function __construct () 
	{
		$this->id_usuario = 0;
		$this->nombre ='';
		$this->op1=0;	
		$this->op2=0;
		$this->op3=0;	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM tbl_museos');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($id_museos) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM tbl_museos WHERE Id_museos = $id_museos");
		$conexion->cerrar();
		return $listado[0];
	}
	public function ingresar () 
	{		
		$s = "INSERT INTO tbl_museos (Nombre,op1,op2,op3) VALUES ('$this->nombre'".",'$this->op1'".",'$this->op2','$this->op3')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM tbl_museos WHERE id_museos = $this->id_museos";
		echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE tbl_museos SET Nombre = '$this->nombre'".",op1= '$this->op1'".",op2='$this->op2',op3= '$this->op3' WHERE id_museos = $this->id_museos";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}