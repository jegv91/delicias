<?php
include_once("../models/activeRecord.php");

/* Clase USER, extiende de Active 
 ** @author: JEGV
 */

class Producto extends Active{
	private $id;
    private $nombre;
	private $categoria;
    private $descripcion;
    private $precio;
	private $foto;
    private $fecha_registro;

    public function __constructor() {
		parent::__construct();
    }

    public function __set($var, $val){
		$this->$var = $val;
    }

    public function __get($var){
		return $this->$var;
    }
}
?>
