<?php require_once 'Conexion.php';

class producto 
{
	//Atributos=Variables
	public $idproducto;
	public $nombre;
	public $descripciom;	
	public $precioventa;
	public $existencia;
	private $conexion;

	
    
	//Constructor
	public function __construct () 
	{
		$this->idproducto = 0;
		$this->nombre ='';
		$this->descripcion='';	
		$this->precioventa=0;
		$this->existencia=0;	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM tblproductos');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($idproducto) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM tblproductos WHERE idproducto = $idproducto");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO tblproductos (nombre,descripcion,precioventa,existencia) VALUES ('$this->nombre'".",'$this->descripcion'".",'$this->precioventa'".",'$this->existencia')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM tblproductos WHERE idproducto = $this->idproducto";
		echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE tblproductos SET nombre = '$this->nombre'".",descripcion= '$this->descripcion'".",precioventa=$this->precioventa".", existencia = $this->existencia WHERE idproducto = $this->idproducto";
		echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
    public function Agregar()
    {
      ingresar();
     
    }
}