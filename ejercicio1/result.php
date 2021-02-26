<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <header class="bg-primary py-3">
            <h2 class="text-center text-white">Resultado</h2>
        </header>
        <section class="py-4">
            <div class="container">
                <div class="card" >
                    <div class="card-body">
                        <?php    
                            // Convertimos la cadena de texto en un arreglo
                            $numeros = explode(", ", $_POST['numeros']);

                            // Declaramos arreglos a usar
                            $numerosPositivos = array();
                            $numerosPares = array();

                            // Almacenamos la cantidad de elementos del arreglo
                            $cantidad = count($numeros);

                            // Variable a usar para la respuesta
                            $respuesta = "";

                            // Recorremos arreglo recibido
                            foreach ($numeros as $numero) {
                                // Comprobamos que numeros son pares
                                if ($numero % 2 == 0) {
                                    // Agregamos los números a su respectivo arreglo
                                    array_push($numerosPares, $numero);
                                }

                                // Comprobamos que números son positivos
                                if ($numero > 0) {
                                    // Agregamos los números a su respectivo arreglo
                                    array_push($numerosPositivos, $numero);
                                }

                                // Concatenamos todos los números
                                $respuesta .= ($numero == end($numeros)) ? $numero : $numero . ", " ;
                            }

                            // Almacenamos la cantidad de numeros pares
                            $paresCantidad = count($numerosPares);

                            // Calculamos el porcentaje de números pares en el arreglo
                            $porcentaje = ($paresCantidad * 100) / intval($cantidad);
                            
                            // Varibale que almacenara los números positivos en orden descendente
                            $positivos = "";

                            // Alteramos el arreglo para que se ordene de manera descendente
                            rsort($numerosPositivos);

                            // Recorremos el arreglo reordenado por la función rsort()
                            foreach ($numerosPositivos as $numero) {
                                // Concatenamos los números en la varible anteriormente creada
                                $positivos .= ($numero == end($numerosPositivos)) ? $numero : $numero . ", " ;
                            }
                        ?> 
                        <div class="card-body">
                            <p><strong>Números:</strong>&nbsp;<?php echo $respuesta; ?></p>
                            <p><strong>Porcentaje de números pares ingresados: </strong><?php echo round($porcentaje, 2); ?>% (<?php echo $paresCantidad; ?>)</p>
                            <p><strong>Números positivos:</strong>&nbsp;<?php echo $positivos; ?></p>
                        </div>
                    </div>
                </div>
                <br>
                <a href="index.php" class="btn btn-primary" disabled>Nuevo proceso</a>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>

