<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Octagono</title>
</head>
<!--Realice un programa en PHP que permita realzar el calculo del área de un 
octágono regular con valores dinámicos.
    Formula area    >>> A = (P * a)2
    --------------------------------------
    Formula apotema >>> a = c * tg(α)
    valor de n      >>> n = 8
    formula beta    >>> ß = (180 (n-2))/n  (angulo de cada lado del octagono)
    formula alfa    >>> α = ß/2  (angulo del triangulo para el apotema)
    forml lado trngl>>> c = Lcm/2
    forml perimetro >>> P = L * n
-->
<body>
    <div class="principal">
        <h1>CALCULAR AREA</h1>
        <div class="secundaria">
            <form action="index.php" method="POST">
                <h3>Datos del Octágono</h3>
                <label for="lado">Lado</label> <br>
                <input type="text" name="lado" id="lado" placeholder="Ingrese el lado en 'cm'" require>
                <br>
                <label for="apotema">Apotema</label> <br>
                <input type="text" name="apotema" id="apotema" placeholder="Ingrese tamaño apotema 'cm'">
                <br>
                <input type="submit" value="Calcular" name="calcular">
            </form>
            <div class="resultado">
                <h3>Resultado</h3>
                <?php include("./assets/main.php")?>
            </div>
        </div>
    </div>
</body>
</html>
