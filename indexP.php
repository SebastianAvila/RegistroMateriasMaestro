<?php

require("coneccionDB.php");



$query = "SELECT id_Maes , nombre_Maestro FROM lista_maestros ";
$resultado = $mysqli->query($query);


?>




<html>

<head>

    <title>Asignacion de Materias</title>
    <script  src="js/jquery-3.5.1.min.js"></script>
</head>

<body>

    <legend>Sistema de asignacion de Materias escolares</legend><br>

    <form action="guarda.php" method="POST">
        <select name="muestraMaestros" id="muestraMaestros" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Maes']; ?>"><?php echo $row['nombre_Maestro']; ?></option>
				<?php } ?>
         
        </select>

    </form>
</body>


</html>