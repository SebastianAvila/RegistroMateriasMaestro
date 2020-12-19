<?php

require("coneccionDB.php");



$queryMaestros = "SELECT id_Maes , nombre_Maestro FROM lista_maestros ORDER BY nombre_Maestro ASC";
$resultadoMaestros = $mysqli->query($queryMaestros);

$queryMaterias = "SELECT id_Materia , nombre_Materia FROM lista_materias ORDER BY nombre_Materia ASC";
$resultadoMaterias = $mysqli->query($queryMaterias);
$resultadoMaterias1 = $mysqli->query($queryMaterias);
$resultadoMaterias2 = $mysqli->query($queryMaterias);
$resultadoMaterias3 = $mysqli->query($queryMaterias);
$resultadoMaterias4 = $mysqli->query($queryMaterias);
$resultadoMaterias5 = $mysqli->query($queryMaterias);
$resultadoMaterias6 = $mysqli->query($queryMaterias);

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
            <?php while($row = $resultadoMaestros->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Maes']; ?>"><?php echo $row['nombre_Maestro']; ?></option>
				<?php } ?>
         
        </select>

        <select name="muestraMaterias" id="muestraMaterias" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultadoMaterias->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Materia']; ?>"><?php echo $row['nombre_Materia']; ?></option>
				<?php } ?>
         
        </select>

        
        <select name="muestraMaterias" id="muestraMaterias" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultadoMaterias1->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Materia']; ?>"><?php echo $row['nombre_Materia']; ?></option>
				<?php } ?>
         
        </select>
        
        <select name="muestraMaterias" id="muestraMaterias" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultadoMaterias2->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Materia']; ?>"><?php echo $row['nombre_Materia']; ?></option>
				<?php } ?>
         
        </select>
        
        <select name="muestraMaterias" id="muestraMaterias" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultadoMaterias3->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Materia']; ?>"><?php echo $row['nombre_Materia']; ?></option>
				<?php } ?>
         
        </select>
        
        <select name="muestraMaterias" id="muestraMaterias" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultadoMaterias4->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Materia']; ?>"><?php echo $row['nombre_Materia']; ?></option>
				<?php } ?>
         
        </select>
        
        <select name="muestraMaterias" id="muestraMaterias" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultadoMaterias5->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Materia']; ?>"><?php echo $row['nombre_Materia']; ?></option>
				<?php } ?>
         
        </select>
        
        <select name="muestraMaterias" id="muestraMaterias" placeholder="seleccione">
            <option value="0">Seleccione</option>
            <?php while($row = $resultadoMaterias6->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_Materia']; ?>"><?php echo $row['nombre_Materia']; ?></option>
				<?php } ?>
         
        </select>

    </form>
</body>


</html>