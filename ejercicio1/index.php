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
            <h2 class="text-center text-white">Números</h2>
        </header>
        <section class="py-4">
            <div class="container">
                <div class="card" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <form id="agregar-numero" name="agregar-numero" autocomplete="off">
                                    <label for="numero_label">Agregue 12 números</label>
                                    <input type="number" class="form-control" id="numero" name="numero" step="0" required>
                                    <br>
                                    <button type="submit" id="agregar" name="agregar" class="btn btn-primary">Agregar</button>
                                </form>
                            </div>
                            <div class="col-6">
                                <form action="result.php" method="POST" id="datos" name="datos" autocomplete="off">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="numeros_label">Numeros a enviar</label>
                                            <input type="text" class="form-control" id="numeros" name="numeros" value="" readonly>
                                        </div>
                                        <div class="col-6">
                                            <br>
                                            <button type="submit" id="enviar" class="btn btn-primary" disabled>Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>
