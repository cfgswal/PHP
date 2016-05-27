<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Curso de PHP | mayo de 2016 | ejer07.php</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/colors.css">
  <link rel="stylesheet" href="../css/ejemplos.css">
</head>
<body>
  <h1>Ejercicio 7</h1>
  <p>Modificar el ejemplo 19 para que muestre sólo aquellas entradas que esten activas.</p>
  <p>Además, queremos se se muestren ordenadas por fecha, apareciendo primero las más nuevas.</p>
  <p>Como bonus, se plantea que sólo se muestren las 10 últimas entradas.</p>




  <h1>Mostrar todas las filas de una tabla de MySQL</h1>
  <p>Se conecta a una base de datos llamada "blog" en la máquina "localhost" con el usuario "root" y contraseña
    "root".</p>
  <p>Muestra las filas de la tabla "entrada" en una tabla HTML.</p>
  <p>No hace comprobación de errores.</p>

  <?php
  // Abrir la conexión
  $conexion = mysqli_connect("localhost", "root", "root", "blog");

  // Formar la consulta (seleccionando todas las filas)
  $q = "select * from entrada order by fecha asc";

  // Ejecutar la consulta en la conexión abierta y obtener el "resultset" o abortar y mostrar el error
  $r = mysqli_query($conexion, $q) or die(mysqli_error($conexion));

  // Calcular el número de filas
  $total = mysqli_num_rows($r);
  $num = 0;
  // Mostrar el contenido de las filas, creando una tabla XHTML
  if ($total > 0) {
    echo '<table border="1">';
    echo '<tr><th>Título</th><th>Texto</th><th>Fecha</th><th>Activo</th></tr>';

    while ($fila = mysqli_fetch_assoc($r) and $num < 10) {

      if ($fila['activo'] = true ) {

        echo "<tr>";
        echo "<td><a href='".$fila['titulo']."'></a></td>";
        echo "<td>" . $fila['texto'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['activo'] . "</td>";
        echo "</tr>";
        $num = $num + 1;
      }
    }
    echo '</table>';
  }

  // Cerrar la conexión
  mysqli_close($conexion);
  ?>
</body>
</html>
