<?php
require_once "admin/dbAdmin.php";
class Producto
{
  private $pdo;

  private $prod_id;
  private $prod_nombre;
  private $prod_categoria;
  private $prod_descripcion;
  private $prod_precio;
  private $prod_stock;
  private $prod_fecha;
  private $prod_vendMes;
  private $prod_vendSem;
  private $prod_img;
  public $CATEGORIA_PULSERAS = "pulseras";
  public $CATEGORIA_collares = "collares";
  public $CATEGORIA_anillos = "anillos";
  public $CATEGORIA_pendientes = "pendientes";
  public $CATEGORIA_piercings = "piercings";


  public function __construct()
  {
    $this->pdo = DataBase::Conectar();
  }
  /* MÉTODOS GETTERS Y SETTERS */

  //* id

  public function getPro_id(): ?int
  {
    return $this->prod_id;
  }
  public function setPro_id(int $id)
  {
    $this->prod_id = $id;
  }

  //* descripción

  public function getPro_descripcion(): ?string
  {
    return $this->prod_descripcion;
  }
  public function setPro_descripcion(string $descripcion)
  {
    $this->prod_descripcion = $descripcion;
  }

  //* nombre

  public function getPro_nombre(): ?string
  {
    return $this->prod_nombre;
  }
  public function setPro_nombre(string $nombre)
  {
    $this->prod_nombre = $nombre;
  }

  //* categoria
  public function getPro_categoria(): ?string
  {
    return $this->prod_categoria;
  }
  public function setPro_categoria(string $categoria)
  {
    $this->prod_categoria = $categoria;
  }


  //* precio

  public function getPro_precio(): ?int
  {
    return $this->prod_precio;
  }
  public function setPro_precio(int $precio)
  {
    $this->prod_precio = $precio;
  }

  //* stock
  public function getPro_stock(): ?int
  {
    return $this->prod_stock;
  }
  public function setPro_stock(int $stock)
  {
    $this->prod_stock = $stock;
  }

  //* fecha
  public function getPro_fecha(): ?string
  {
    return $this->prod_fecha;
  }
  public function setPro_fecha(string $fecha)
  {
    $this->prod_fecha = $fecha;
  }

  //* vendidos por mes
  public function getPro_vendMes(): ?int
  {
    return $this->prod_vendMes;
  }
  public function setPro_vendMes(int $vendMes)
  {
    $this->prod_vendMes = $vendMes;
  }

  //* vendidos por semana
  public function getPro_vendSem(): ?int
  {
    return $this->prod_vendSem;
  }
  public function setPro_vendSem(int $vendSem)
  {
    $this->prod_vendSem = $vendSem;
  }

  //* imagen
  public function getPro_img(): ?string
  {
    return $this->prod_img;
  }
  public function setPro_img(string $img)
  {
    $this->prod_img = $img;
  }


  /***************************************************************/
  /********************AHORA VAMOS A CREAR OTROS MÉTODOS**********/


  /** MÉTODO LISTAR PRODUCTOS */

  public function Listar()
  {
    try {
      $sql = "SELECT * FROM producto";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function ListarPulseras()
  {
    try {
      $sql = "SELECT * FROM producto WHERE categoria = :categoria";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":categoria", $CATEGORIA_PULSERAS);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      error_log("Error al listar: " . $e->getMessage());
      return [];
    }
  }

  public function ListarCollares()
  {
    try {
      $sql = "SELECT * FROM producto WHERE CONTAINS(:categoria, 'collares')";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":categoria", $categoria);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      error_log("Error al listar: " . $e->getMessage());
      return [];
    }
  }

  public function ListarAnillos()
  {
    try {
      $sql = "SELECT * FROM producto WHERE categoria = :categoria";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":categoria", $CATEGORIA_anillos);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      error_log("Error al listar: " . $e->getMessage());
      return [];
    }
  }

  public function ListarPendientes()
  {
    try {
      $sql = "SELECT * FROM producto WHERE categoria = :categoria";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":categoria", $CATEGORIA_pendientes);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      error_log("Error al listar: " . $e->getMessage());
      return [];
    }
  }

  public function ListarPiercings()
  {
    try {
      $sql = "SELECT * FROM producto WHERE categoria = :categoria";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":categoria", $CATEGORIA_piercings);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      error_log("Error al listar: " . $e->getMessage());
      return [];
    }
  }



  /** MÉTODO LIBROS MÁS VENDIDOS */
  public function MasVendidos()
  {
    try {
      $sql = "SELECT * FROM producto ORDER BY vendidos_mes limit 10";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  public function Novedades()
  {
    try {
      $sql = "SELECT * FROM producto ORDER BY fecha_creacion limit 10";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function Outlet()
  {
    try {
      $sql = "SELECT * FROM producto ORDER BY vendidos_mes DESC limit 10";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  /* MÉTODO PARA INSERTAR productos */
  public function Insertar(producto $p)
  {
    try {
      $sql = "INSERT INTO producto (descripcion, nombre, categoria, precio, stock, fecha, vendidos_mes, vendidos_semana, img) VALUES (:descripcion, :nombre, :categoria, :precio, :stock, :fecha, :vendidos_mes, :vendidos_semana, :img)";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":descripcion", $p->getPro_descripcion());
      $consulta->bindParam(":nombre", $p->getPro_nombre());
      $consulta->bindParam(":categoria", $p->getPro_categoria());
      $consulta->bindParam(":precio", $p->getPro_precio());
      $consulta->bindParam(":stock", $p->getPro_stock());
      $consulta->bindParam(":fecha", $p->getPro_fecha());
      $consulta->bindParam(":vendidos_mes", $p->getPro_vendMes());
      $consulta->bindParam(":vendidos_semana", $p->getPro_vendSem());
      $consulta->bindParam(":img", $p->getPro_img());
      $consulta->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA OBTENER PRODUCTO SELECCIONADO */
  public function Obtener($id)
  {
    try {
      $sql = "SELECT * FROM producto WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
      $res = $consulta->fetch(PDO::FETCH_OBJ);

      $p = new Producto();
      $p->setPro_id($res->id);
      $p->setPro_descripcion($res->descripcion);
      $p->setPro_nombre($res->nombre);
      $p->setPro_categoria($res->categoria);
      $p->setPro_precio($res->precio);
      $p->setPro_stock($res->stock);
      $p->setPro_fecha($res->fecha);
      $p->setPro_vendMes($res->vendidos_mes);
      $p->setPro_vendSem($res->vendidos_semana);
      $p->setPro_img($res->img);
      return $p;
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }

  /* MÉTODO PARA ACTUALIZAR PRODUCTO */
  public function Actualizar(Producto $p)
  {
    try {
      $sql = "UPDATE producto SET titulo = :titulo,autor = :autor, genero = :genero, anio = :anio, isbn = :isbn, cantidad = :cantidad WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $p->getPro_id());
      $consulta->bindParam(":descripcion", $p->getPro_descripcion());
      $consulta->bindParam(":nombre", $p->getPro_nombre());
      $consulta->bindParam(":categoria", $p->getPro_categoria());
      $consulta->bindParam(":precio", $p->getPro_precio());
      $consulta->bindParam(":stock", $p->getPro_stock());
      $consulta->bindParam(":fecha", $p->getPro_fecha());
      $consulta->bindParam(":vendidos_mes", $p->getPro_vendMes());
      $consulta->bindParam(":vendidos_semana", $p->getPro_vendSem());
      $consulta->bindParam(":img", $p->getPro_img());
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }


  /* MÉTODO PARA ELIMINAR PRODUCTO */
  public function Eliminar($id)
  {
    try {
      $sql = "DELETE FROM producto WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }
}
