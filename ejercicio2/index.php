<!DOCTYPE html>
<html lang="en" dir="ltr">
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
                <div class="py-3">
                    <h3 class="text-center">Seleccione la figura geometrica que desea calcular</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <center>
                                    <h4>Esfera</h4>
                                    <br>
                                    <a href="proceso.php?figura=esfera" class="btn btn-outline-secondary p-4">
                                        <img src="img/shapes/esfera.png" width="200" alt="Esfera">
                                    </a>
                                </center>
                            </div>
                            <div class="col-4">
                                <center>
                                    <h4>Cubo</h4>
                                    <br>
                                    <a href="proceso.php?figura=cubo" class="btn btn-outline-secondary p-4">
                                        <img src="img/shapes/cubo.png" width="200" alt="Cubo">
                                    </a>
                                </center>
                            </div>
                            <div class="col-4">
                                <center>
                                    <h4>Cilindro</h4>
                                    <br>
                                    <a href="proceso.php?figura=cilindro" class="btn btn-outline-secondary p-4">
                                        <img src="img/shapes/cilindro.png" width="200" alt="Cilindro">
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
