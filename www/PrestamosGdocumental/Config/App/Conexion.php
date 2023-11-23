<?php
class Conexion{
    private $conect;
    public function __construct()
    {
        $pdo = "mysql:host=".host.";dbname=".db.";.charset.";
        try {
                    echo '<script>console.log("inicio' . $pdo . '");</script>';
            $this->conect = new PDO($pdo, user, pass);
                        echo '<script>console.log("2");</script>';
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<script>console.log("nice");</script>';
        } catch (PDOException $e) {
            echo "Error en la conexion".$e->getMessage();
            echo '<script>console.log("Error en la conexion' . $e->getMessage() . '");</script>';
        }
    }
    public function conect()
    {
                echo '<script>console.log("prueba");</script>';
        return $this->conect;
    }
}

?>
