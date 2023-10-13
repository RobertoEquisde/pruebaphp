<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba php y azure</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Bienvenido a mi página
                </div>
                <div class="card-body">
                    <?php
                    $hora = date("H");
                    $saludo = "";

                    if ($hora >= 6 && $hora < 12) {
                        $saludo = "¡Buenos días!";
                    } elseif ($hora >= 12 && $hora < 18) {
                        $saludo = "¡Buenas tardes!";
                    } else {
                        $saludo = "¡Buenas noches!";
                    }

                    echo "<p class='lead'>$saludo Esta es una página básica con PHP y Bootstrap.</p>";
                    echo "<p>La hora actual es: " . date("h:i:s a") . "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>