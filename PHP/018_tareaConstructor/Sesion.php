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
        <texto>Usuario: </texto><input type="text" name="usuario">
        <hr style="height: 5px;border:0px">
        <texto>Contraseña: </texto><input type="password" name="pas">
        <hr style="height: 5px;border:0px">
        <button type="submit" name="inicia">Iniciar sesión</button>
    </form>
</body>
</html>
<?php
 if (isset($_REQUEST['inicia'])) {
    $user = $_POST['usuario'];
    $psswd = $_POST['pas'];
    class Login{
        public $user;
        public $pass;
        function __construct($user,$pass)
        {
            $this->user=$user;
            $this->pass=$pass;
        }
        function logiar(){
            if($this->user == 'admin' && $this->pass == '12345'){
                echo "<br>Inicio sesión correctamente.<br>";
            }else {
                echo "<br>Datos incorrectos.<br>";
            }
        }
    }
    $log = new Login($user,$psswd);
    $log->logiar();
}
?>