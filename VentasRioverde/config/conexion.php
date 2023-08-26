<?php
    require_once 'global.php';

    $conn = new mysqli(DBHOST,DBNAME,DBPASS,DBUSERNAME);
    
    mysqli_query($conn,'SET NAMES "'.DBENCODE.'"');

    if(mysqli_connect_errno())
    {
        printf("Fallo la conexion a la base de datos: %s\n",mysqli_connect_error());
        exit();
    }

    if(!function_exists('ejecutarConsulta'))
    {
        function ejecutarConsulta($sql)
        {
            global $conn;
            $query = $conn->query($sql);
            return $query;
        }

        function ejecutarConsultaSimpleFila($sql)
        {
            global $conn;
            $query = $conn->query($sql);
            $row = $query->fetch_assoc();
            return $row;
        }

        function ejecutarConsulta_retornarID($sql)
        {
            global $conn;
            $query = $conn->query($sql);
            return $conn->insert_id;
        }

        function limpiarCadena($str)
        {
            global $conn;
            $str = mysqli_real_escape_string($conn,trim($str));
            return htmlspecialchars($str);
        }
    }
