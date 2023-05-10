<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h1>Iniciar sesión</h1>
        <texto>Nombre: </texto><input type="text" name="nombre">
        <hr style="height: 5px;border:0px">
        <texto>Edad: </texto><input type="text" name="edad">
        <hr style="height: 5px;border:0px">
        <texto>Pais: </texto><input type="text" name="pais">
        <hr style="height: 5px;border:0px">
        
        <button type="submit" name="inicia">Iniciar sesión</button>
    </form>
</body>
</html>
<?php
 if (isset($_REQUEST['inicia'])) {
    $nom = $_POST['nombre'];
    $ed = $_POST['edad'];
    $pa = $_POST['pais'];
    class Peronas{
        public $nombre;
        public $edad;
        public $pais;
        function __construct($nombre,$edad,$pais)
        {
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->pais=$pais;
        }
        public function mostrarInformacion(){
            echo "Nombre: ".$this->nombre.", Edad: ".$this->edad.", Pais: ".$this->pais;;
        }
    }
    $perso=new Peronas($nom,$ed,$pa);
    $perso->mostrarInformacion();
 }
?>