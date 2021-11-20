<?php require_once 'Conexion.php';

class emp 
{
	//Atributos=Variables
	public $idemp;
	public $nombre;
	public $supervisor;	
	public $departamento;
	public $edificio;
	private $conexion;

	
    
	//Constructor
	public function __construct () 
	{
		$this->idemp = 0;
		$this->nombre ='';
		$this->supervisor='';	
		$this->departamento=0;
		$this->edificio=0;	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM tblemp');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($idemp) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM tblemp WHERE idemp = $idemp");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO tblemp (nombre,supervisor,departamento,edificio) VALUES ('$this->nombre'".",'$this->supervisor'".",'$this->departamento'".",'$this->edificio')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM tblemp WHERE idemp = $this->idemp";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE tblemp SET nombre = '$this->nombre'".",supervisor= '$this->supervisor'".",departamento='$this->departamento'".", edificio = '$this->edificio' WHERE idemp = $this->idemp";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
    public function Agregar()
    {
      ingresar();
     
    }
}