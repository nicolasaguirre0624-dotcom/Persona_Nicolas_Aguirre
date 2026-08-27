<?php
require_once '../controllers/PersonaController.php';

$controller = new PersonaController();
$personas = $controller->listar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Personas</title>
</head>
<body>
    <h1>Registros de la tabla Persona</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Correo</th>
        </tr>
        <?php foreach ($personas as $p): ?>
        <tr>
            <td><?php echo $p['id']; ?></td>
            <td><?php echo $p['nombre']; ?></td>
            <td><?php echo $p['edad']; ?></td>
            <td><?php echo $p['correo']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>