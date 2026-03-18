<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
</head>

<body>

<h2>Calculadora</h2>

<form action="cal.php" method="post">

    <div>
             <label>Numero 1:</label>
              <input type="number" name="numero1" required>
    </div>

    <div>
             <label>Numero 2:</label>
             <input type="number" name="numero2" required>
    </div>

    <div>
        <label>Seleccione una opcion :</label><br>

                 Sima:
                 <input type="radio" value="0" name="op" required>
                 Resta:
                 <input type="radio" value="1" name="op">
                  Multiplicacion:
                <input type="radio" value="2" name="op">
                Division:
                  <input type="radio" value="3" name="op">
          </div>

          <br>

    <button type="submit">Calcular</button>

</form>
</body>
</html>