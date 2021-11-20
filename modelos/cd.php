<?php require_once 'Conexion.php';

class cd 
{
	//Atributos=Variables
	public $idcd;
	public $nombrecd;
	public $deportecd;	
	public $paiscd;
	public $ciudadcd;
	private $conexion;

	
    
	//Constructor
	public function __construct () 
	{
		$this->idcd = 0;
		$this->nombrecd ='';
		$this->deportecd='';	
		$this->paiscd=0;
		$this->ciudadcd=0;	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM tblcd');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($idcd) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM tblcd WHERE idcd = $idcd");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO tblcd (nombrecd,deportecd,paiscd,ciudadcd) VALUES ('$this->nombrecd'".",'$this->deportecd'".",'$this->paiscd'".",'$this->ciudadcd')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM tblcd WHERE idcd = $this->idcd";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE tblcd SET nombrecd = '$this->nombrecd'".",deportecd= '$this->deportecd'".",paiscd='$this->paiscd'".", ciudadcd = '$this->ciudadcd' WHERE idcd = $this->idcd";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
    public function Agregar()
    {
      ingresar();
     
    }
}