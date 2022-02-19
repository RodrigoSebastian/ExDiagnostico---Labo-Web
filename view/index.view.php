<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Diagnostico</title>

    <script src="index.js"></script>
    <link rel="shortcut icon" href="./img/kioan.ico">

    <!-- //?Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div>
            <h1 class="text-center">Tabla para examen de diagnostico</h1>
            <hr>
        </div>
        <form action="" class="needs-validation" method="POST">
            <div class="row justify-content-center mb-3"> 
                <!-- //?Nombre -->
                <div class="col-4">
                    <input type="text" class="form-control" name="input_name" id="inputName" placeholder="Nombre(s)" required>
                </div>
                <!-- //?Apellido Paterno -->
                <div class="col-3">
                    <input type="text" class="form-control" name="input_apPaterno" id="inputApPaterno" placeholder="Apellido Paterno" required>
                </div>
                <!-- //?Apellido Materno -->
                <div class="col-3">
                    <input type="text" class="form-control" name="input_apMaterno" id="inputApMaterno" placeholder="Apellido Materno" required>
                </div>
                <!-- //?Sexo -->
                <div class="col-2">
                    <select name="input_sexo" class="form-select" id="inputSexo" class="form-select" required>
                        <option selected disabled value="">Selecciona tu sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <!-- //?Dirección -->
                <div class="col-4">
                    <input type="text" class="form-control" name="input_direccion" id="inputDireccion" placeholder="Dirección" required>
                </div>
                <!-- //?Correo -->
                <div class="col-4">
                    <input type="email" class="form-control" name="input_correo" id="inputCorreo" placeholder="Correo Personal" required>
                </div>
                <!-- //?Lada y Telefono -->
                <div class="col-4">
                    <div class="input-group d-flex align-items-center">
                        <div class="col-3 text-center">
                            <label for="inputLada" class="form-label">Teléfono: </label>
                        </div>
                        <div class="col-2">
                            <input type="tel" class="form-control" name="input_lada" id="inputLada" maxlength="4" placeholder="+52" required>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="input_telefono" id="inputTelefono" minlength="10" maxlength="10" placeholder="727 119 0177" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </div>  
        </form>

        <div class="container text-center">
            <h1>Todos los registros</h1>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</td>
                        <th scope="col">Nombre(s)</td>
                        <th scope="col">Apellido Paterno</td>
                        <th scope="col">Apellido Materno</td>
                        <th scope="col">Sexo</td>
                        <th scope="col">Dirección</td>
                        <th scope="col">Correo Personal</td>
                        <th scope="col">Télefono</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- //? Estructura básica -->
                    <?php foreach ($personas as $key => $persona): ?>
                        <tr>
                        <th scope="row"><?= $key; ?></th>
                        <td><?= $persona['nombre']; ?></td>
                        <td><?= $persona['apellidoPaterno']; ?></td>
                        <td><?= $persona['apellidoMaterno']; ?></td>
                        <td>
                            <?php if($persona['sexo'] == 'M'): ?>                           
                                Masculino
                            <?php else: ?>
                                Femenino
                            <?php endif; ?>   
                        <td><?= $persona['direccion']; ?></td>
                        <td><?= $persona['correo']; ?></td>
                        <td><?= $persona['lada'] . " " .$persona['telefono']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>