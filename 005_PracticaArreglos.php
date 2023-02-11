<?php
    $persona = array (
        array(
            array(
                array(
                    array(
                        '21 años'
                    )
                ,'Rodriuez,')
            ,'Espinoza,')
        ,'Isidoro,')
    ,'Ezequiel,');
    
    echo $persona[1]."<br />";
    echo $persona[0][1]."<br />";
    echo $persona[0][0][1]."<br />";
    echo $persona[0][0][0][1]."<br />";
    echo $persona[0][0][0][0][0]."<br />";
?>