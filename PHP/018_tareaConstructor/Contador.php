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
        <h1>Contador</h1>
        <texto>Segundos a contar: </texto><input type="number" name="seg">
        <hr style="height: 5px;border:0px">
        <button type="submit" name="inicia">Iniciar</button>
    </form>
</body>
</html>
<?php
 if (isset($_REQUEST['inicia'])) {
    $seg = $_POST['seg'];
    class Contador{
        public $segundos;
        function __construct($segundos)
        {
            $this->segundos=$segundos;
        }
        function cuenta(){
            if ($this->segundos > 0) {
                $res = $this->segundos - 1;
                echo "<h1 style="."font-size:50px;color:blue".">". $res+1 ."<h1><br>";
                sleep(1);
                $this->segundos=$res;
                $this->cuenta();
            }else{
                echo"Fin de tiempo.";
            }
        }
    }
    $reloj = new Contador($seg);
    $reloj->cuenta();
}
?>