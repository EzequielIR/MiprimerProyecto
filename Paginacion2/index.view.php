<!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Paginación</title>
 </head>
 <body>
    <div class="contenedor">  
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
                <?php foreach($articulos as $articulo): ?>
                
                <li> <?php echo $articulo['id'].'.-'.$articulo['articulo']; ?> </li>

                <?php endforeach; ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <?php if ($pagina == 1): ?>
                    <li class="disabled"><a>&laquo;</a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <?php
                    for($i = 1; $i <= $numeroPaginas; $i++){
                        if ($pagina === $i) {
                            echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        } else {
                            echo "<li><a href='?pagina=$i'>$i</a></li>";
                        }
                    }
                ?>
                <?php if ($pagina == $numeroPaginas):?>
                   <li class="disabled"><a>&raquo;</a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </section>

    </div>    
        

 </body>
 </html>