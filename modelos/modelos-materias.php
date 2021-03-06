<?php require_once 'Conexion.php';

class usuario 
{
	//Atributos=Variables
	public $id_materias;
	public $nombre;
	public $alumnos;	
	public $maestro;
	public $horas;
	private $conexion;
	
	//Constructor
	public function __construct () 
	{
		$this->id_materias = 0;
		$this->nombre ='';
		$this->alumnos='';	
		$this->maestro='';
		$this->horas=0;	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM tbl_materias');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($id_materias) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM tbl_materias WHERE Id_materias = $id_materias");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO tbl_materias (nombre,alumnos,maestro,horas) VALUES ('$this->nombre'".",'$this->alumnos'".",'$this->maestro','$this->horas')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM tbl_materias WHERE id_materias = $this->id_materias";
		echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE tbl_materias SET Nombre = '$this->nombre'".",alumnos= '$this->alumnos'".",maestro='$this->maestro',horas= '$this->horas' WHERE id_materias = $this->id_materias";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}