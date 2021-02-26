<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculo de áreas</title>
        <link rel="shortcut icon" href="img/cube.png" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <header class="bg-success py-3">
            <h2 class="text-center text-white">Calculo de aréas</h2>
        </header>
        <section class="py-4">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <div class="row">
                                <?php 
                                    // Obtenemos la figura de la variable GET de la url
                                    $figura = $_GET['figura'];

                                    // Validamos si la variable POST posee elementos
                                    if (count($_POST) == 0) { 
                                ?>
                                    <div class="col-6">
                                        <h5 class="card-title">Calculo de area de <?php echo $_GET['figura']; ?></h5>
                                        <form method="POST" id="area" name="area" autocomplete="off">
                                            <br>
                                            <?php
                                                // Variable que almacena el formulario
                                                $formulario = "";

                                                // Validamos la figura obtenida de la variable GET
                                                switch ($figura) {
                                                    case 'esfera':
                                                        // Asignamos el formulario de la esfera a la variable
                                                        $formulario = '<label for="numero_label">Ingrese el radio de la esfera (cm)</label>
                                                        <input type="number" class="form-control" id="radio" name="radio" step="0.01" required>';
                                                        break;

                                                    case 'cubo':
                                                        // Asignamos el formulario del cubo a la variable
                                                        $formulario = '<label for="numero_label">Ingrese el tamaño de las aristas del cubo (cm)</label>
                                                        <input type="number" class="form-control" id="arista" name="arista" step="0.01" required>';
                                                        break;
                                                
                                                    case 'cilindro':
                                                        // Asignamos el formulario del cilindro a la variable
                                                        $formulario = '<label for="numero_label">Ingrese el radio del cilindro (cm)</label>
                                                        <input type="number" class="form-control" id="radio" name="radio" step="0.01" required><br><label for="numero_label">Ingrese la altura del cilindro (cm)</label>
                                                        <input type="number" class="form-control" id="altura" name="altura" step="0.01" required>';
                                                        break;

                                                    default:
                                                        // Asignamos valor por defecto en caso sea una figura que no este disponible
                                                        $formulario = "<br>Opción invalida<br>";
                                                        break;
                                                }
                                                
                                                // Imprimimos el formulario
                                                echo $formulario;
                                            ?>
                                            <br>
                                            <button type="submit" id="calcular" name="calcular" class="btn btn-primary">Calcular</button>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <img src="img/shapes/<?php echo $_GET['figura']; ?>.png" width="150" alt="">
                                    </div>
                                <?php } else { ?>
                                    <center>
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Area de <?php echo $_GET['figura']; ?></h5>
                                                <?php
                                                    // Variable que almacena el area de cada figura
                                                    $area = 0;

                                                    switch ($figura) {
                                                        case 'esfera':
                                                            // Obtenemod las varibles POST de la esfera
                                                            $radio = $_POST['radio'];

                                                            $area = 4 * pi() * pow($radio, 2);
                                                            break;
                                                        
                                                        case 'cubo':
                                                            // Obtenemod las varibles POST del cubo
                                                            $arista = $_POST['arista'];

                                                            $area = 6 * pow($arista, 2);
                                                            break;
                                                        
                                                        case 'cilindro':
                                                            // Obtenemod las varibles POST del cilindro
                                                            $radio = $_POST['radio'];
                                                            $altura = $_POST['altura'];

                                                            $area = 2 * pi() * $radio * ($radio + $altura);
                                                            break;
                                                    }

                                                    // Sobreescribimos la variable $area para redondear su resultado en caso se den 3 o mas decimales
                                                    $area = round($area, 2);
                                                ?>
                                                <p class="card-text">El area del <?php echo "{$figura} es {$area} cm <sup>2</sup>"; ?></p>
                                            </div>
                                            <div class="col-6">
                                                <img src="img/shapes/<?php echo $_GET['figura']; ?>.png" width="150" alt="">
                                            </div>
                                        </div>
                                    </center>
                                <?php } ?>
                            </div>
                        </center>
                    </div>
                </div> 
                <br>
                <a href="index.php" class="btn btn-success">Nuevo Calculo</a>               
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
