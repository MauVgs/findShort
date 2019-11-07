<?php 

    if(!empty($_POST)){

        $texto = $_POST['texto'];

        $masCorto = finShort($texto);

        print_r('El tamaño del texto más corto es de: ' . $masCorto);

    }
    function finShort($string){
        $dato = explode(" ", $string);
        $resultado = array_map("strlen", $dato);
        $resultado = min($resultado);
        return $resultado;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="texto">Ingresa el texto</label>
                <input type="text" class="form-control" id="texto" placeholder="Mensaje" name="texto">
            </div>
            <button type="submit" class="btn btn-primary">Analizar</button>
        </form>
    </div>
</body>
</html>