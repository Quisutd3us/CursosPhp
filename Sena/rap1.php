<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJERCICIO RAP1 | DESARROLLO WEB CON PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
    <!-- Desarrollo: David Nariño
    SENA: DESARROLLO WEB CON PHP -->

    <div class="jumbotron bg-primary text-white">
        <h1 class="display-3">EJERCICIO RAP 1</h1>
        <p class="lead">Desarrollo web con PHP</p>
        <hr class="my-2 bg-danger">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <fieldset>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" class="form-control form-control-lg" type="text" placeholder="<?php echo 'David Hernando Nariño'?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="cedula">Cedula</label>
                            <input id="cedula" class="form-control form-control-lg" type="text" placeholder="<?php echo 'cc80134982'?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="saludo">Saludo</label>
                        </div>
                        <div class="form-group">

                        
                            <!-- Lanza modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#saludoModal">
                            De click para el Saludo
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="saludoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo 'ING. JAVIER DARIO RICARDO BARBOSA' ?> </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo "Reciba un cordial Saludo de su Alumno <strong>David Nariño</strong> !!!"?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>