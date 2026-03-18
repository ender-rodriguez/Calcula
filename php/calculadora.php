<?php

      $numero1 = (float) $_POST['numero1'];
     $numero2 = (float) $_POST['numero2'];
       $op      = $_POST['op'];

         if ($op == 0) {
            $resultado = $numero1 + $numero2;
             echo "Suma: " . $resultado;
           } elseif ($op == 1) {
             $resultado = $numero1 - $numero2;
            echo "Resta: " . $resultado;
            } elseif ($op == 2) {
             $resultado = $numero1 * $numero2;
               echo "Multiplicacion: " . $resultado;
            } elseif ($op == 3) {

            if ($numero2 != 0) {
             $resultado = $numero1 / $numero2;
              echo "Division: " . $resultado;
               } else {
                  echo "Error: No se puede dividir entre 0";
          }

     }

     ?>

    <br><br>
<a href="calculadora.php">Volver</a>