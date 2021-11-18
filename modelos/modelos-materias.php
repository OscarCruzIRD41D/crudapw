<?php require_once 'Conexion.php';

class usuario 
{
	//Atributos=Variables
	public $id_usuario;
	public $nombre;
	public $usuario;	
	public $contrasena;
	private $conexion;
	
	//Constructor
	public function __construct () 
	{
		$this->id_usuario = 0;
		$this->nombre ='';
		$this->usuario='';	
		$this->contrasena='';	
		$this->conexion = new Conexion();
	}

	//Metodos
	public static function listar () 
	{
		try
		{
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM usuarios');
			$conexion->cerrar();
			return $listado;
	  }
	  catch(Exception $e)
		{
			echo "Error" . $e->getMessage(). "<br>";    
		}
	}

	public static function obtenerPorId ($id_usuario) 
	{
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM usuarios WHERE Id_usuario = $id_usuario");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () 
	{		
		$s = "INSERT INTO usuarios (Nombre,usuario,contrasena) VALUES ('$this->nombre'".",'$this->usuario'".",'$this->contrasena')";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () 
	{
		$s = "DELETE FROM usuarios WHERE id_usuario = $this->id_usuario";
		echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () 
	{
		$s = "UPDATE usuarios SET Nombre = '$this->nombre'".",usuario= '$this->usuario'".",contrasena='$this->contrasena' WHERE id_usuario = $this->id_usuario";
		//echo $s;
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
    
    public function Agregar()
    {
      ingresar();
     
    }

    public function login()
    {
    	try
    	{
    		$conexion = new Conexion ();
    		$listado = $conexion->consultar("SELECT * FROM usuarios WHERE 
    			usuario='$this->usuario' AND contrasena='$this->contrasena'");
    		$conexion->cerrar();
    		if($listado)
    		{
    			//Return listado;
    			return true;
    		}else
    		{
    			return false;
    		}
    	}
    	catch(Exception $e)
    	{
    		echo "Error" . $e->getMessage(). "<br>";
   	}
	}
}