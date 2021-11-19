<?php require_once 'Conexion.php';

class usuario 
{
	//Atributos=Variables
	public $id_oficios;
	public $nombre;
	public $paga;	
	public $horas;
	public $jefe;
	private $conexion;
	//Constructor
	public function __construct () 
	{
		$this->id_oficios = 0;
		$this->nombre ='';
		$this->paga=0;	
		$this->horas=0;
		$this->jefe='';	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM tbl_oficios');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($id_oficios) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM tbl_oficios WHERE Id_oficios = $id_oficios");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO tbl_oficios (Nombre,paga,horas,jefe) VALUES ('$this->nombre'".",'$this->paga'".",'$this->horas','$this->jefe')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM tbl_oficios WHERE id_oficios = $this->id_oficios";
		echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE tbl_oficios SET Nombre = '$this->nombre'".",paga= '$this->paga'".",horas='$this->horas',jefe='$this->jefe' WHERE id_oficios = $this->id_oficios";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
    public function Agregar()
    {
      ingresar();
     
    }
}