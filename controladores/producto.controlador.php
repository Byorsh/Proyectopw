<?php

require_once "modelos/producto.php";

class ProductoControlador{
    
    private $model;

    public function __CONSTRUCT(){
        $this->modelo = new Producto;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/index.php";
        require_once "vistas/pie.php";
    }

    public function FormCrear(){
        $titulo="Registrar";
        $p = new Producto();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos/form.php";
        require_once "vistas/pie.php";
    }

    public function Guardar(){
        $p = new Producto();

        $p->setVideojuego_id(intval($_POST['ID']));
        $p->setNombre_juego($_POST['Nombre']);
        $p->setDesarrolladora($_POST['Desarrolladora']);
        $p->setClasificacion($_POST['Clasificacion']);
        $p->setPrecio($_POST['Precio']);
        $p->setCantidad($_POST['Cantidad']);

        $p->getVideojuego_id() > 0 ?
        $this->modelo->Actualizar($p):
        $this->modelo->Insertar($p);
        header("location:?c=producto");
    }
    
    public function Borrar(){
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=producto");
    }

}