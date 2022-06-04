<?php

class Producto{
    private $pdo;

    private $videojuego_id;
    private $nombre_juego;
    private $desarolladora;
    private $clasificacion;
    private $precio;
    private $cantidad;

    public function __CONSTRUCT(){
        $this->pdo = Database::Conectar();
    }

    public function getVideojuego_id() : ?int{
        return $this->videojuego_id;
    }

    public function setVideojuego_id(int $id){
        $this->videojuego_id = $id;
    }

    public function getNombre_juego() : ? string{
        return $this->nombre_juego;
    }

    public function setNombre_juego(string $nombre){
        $this->nombre_juego = $nombre;
    }

    public function getDesarrolladora() : ? string{
        return $this->desarrolladora;
    }

    public function setDesarrolladora(string $des){
        $this->desarrolladora = $des;
    }

    public function getClasificacion() : ? string{
        return $this->clasificacion;
    }

    public function setClasificacion(string $clas){
        $this->clasificacion = $clas;
    }

    public function getPrecio() : ?float{
        return $this->precio;
    }

    public function setPrecio(float $precio){
        $this->precio = $precio;
    }

    public function getCantidad() : ?int{
        return $this->cantidad;
    }

    public function setCantidad(int $cant){
        $this->cantidad = $cant;
    }

    public function getTotal() : ?int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function Cantidad(){
        try{
            $consulta = $this->pdo->prepare("SELECT SUM(cantidad) AS Cantidad FROM videojuegos;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Total(){
        try{
            $consulta = $this->pdo->prepare("SELECT SUM(precio) AS Total FROM videojuegos;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $consulta = $this ->pdo ->prepare("SELECT * FROM videojuegos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
            $consulta = $this ->pdo ->prepare("SELECT * FROM videojuegos WHERE videojuego_id=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new Producto();

            $p->setVideojuego_id($r->videojuego_id);
            $p->setNombre_juego($r->nombre_juego);
            $p->setDesarrolladora($r->desarrolladora);
            $p->setClasificacion($r->clasificacion);
            $p->setPrecio($r->precio);
            $p->setCantidad($r->cantidad);

            return $p;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Producto $p){
        try{
            $consulta = "INSERT INTO videojuegos(videojuego_id, nombre_juego, desarrolladora, clasificacion, precio, cantidad) 
            VALUES (?,?,?,?,?,?)";
            $this->pdo->prepare($consulta)->execute(array(
                $p->getVideojuego_id(),
                $p->getNombre_juego(),
                $p->getDesarrolladora(),
                $p->getClasificacion(),
                $p->getPrecio(),
                $p->getCantidad()
            ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Producto $p){
        try{
            $consulta = "UPDATE videojuegos SET
            nombre_juego=?,
            desarrolladora=?,
            clasificacion=?,
            precio=?,
            cantidad=?
            WHERE videojuego_id = ?;";
            $this->pdo->prepare($consulta)->execute(array(
                
                $p->getNombre_juego(),
                $p->getDesarrolladora(),
                $p->getClasificacion(),
                $p->getPrecio(),
                $p->getCantidad(),
                $p->getVideojuego_id()
            ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Eliminar($id){
        try{
            $consulta = "DELETE FROM videojuegos WHERE videojuego_id=?;";
            $this->pdo->prepare($consulta)->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}