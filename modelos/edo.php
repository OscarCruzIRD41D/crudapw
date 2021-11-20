<?php require_once 'Conexion.php';

class edo 
{
	//Atributos=Variables
	public $idedo;
	public $nombre;
	public $zona;	
	public $pais;
	public $continente;
	private $conexion;

	
    
	//Constructor
	public function __construct () 
	{
		$this->idedo = 0;
		$this->nombre ='';
		$this->zona='';	
		$this->pais=0;
		$this->continente=0;	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM estados');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($idedo) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM estados WHERE idedo = $idedo");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO estados (nombre,zona,pais,continente) VALUES ('$this->nombre'".",'$this->zona'".",'$this->pais'".",'$this->continente')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM estados WHERE idedo = $this->idedo";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE estados SET nombre = '$this->nombre'".",zona= '$this->zona'".",pais='$this->pais'".", continente = '$this->continente' WHERE idedo = $this->idedo";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
    public function Agregar()
    {
      ingresar();
     
    }
}