<?php require_once '../conxh.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Read huevos</title>
</head>
<body>
  <div >
    <a href="../bienvenido.php"><button type="button">Regresar</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
      <thead>

        <tr>
          <th>ID Huevos</th>
          <th>Características</th>
          <th>Precio</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM huevos";
        $result = $mysqli->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            /*CREATE TABLE huevos(
            id_huevos int(10) PRIMARY KEY,
            caracteristicas varchar(100) NOT NULL,
            precio float(30) NOT NULL

            );*/
            echo "<tr>
            <td>".$row['id_huevos']." </td>
            <td>".$row['caracteristicas']."</td>
            <td>".$row['precio']."</td>
            <td>
            
            </td>
            </tr>";
          }
        } else {
          echo "<tr><td colspan='5'><center>No hay huevos disponibles</center></td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>