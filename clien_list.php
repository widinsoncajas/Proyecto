<?php
// Incluir archivo de conexión
include_once("conexion.php");

try {
    // Crear conexión a la base de datos
    $conexion = Cconexion::ConexionBD();

    // Si se envía el formulario de edición (adaptado para usuarios)
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["guardar_usuario"])) {
        $cedula = $_POST["cedula"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $rol = $_POST["rol"];
        // La contraseña no se edita en este formulario básico

        // Actualizar los datos en la base de datos (tabla usuarios)
        $sql_update = "UPDATE usuarios SET nombres = :nombres, apellidos = :apellidos, correo = :correo, rol = :rol WHERE cedula = :cedula";
        $stmt_update = $conexion->prepare($sql_update);
        $stmt_update->bindParam(':cedula', $cedula);
        $stmt_update->bindParam(':nombres', $nombres);
        $stmt_update->bindParam(':apellidos', $apellidos);
        $stmt_update->bindParam(':correo', $correo);
        $stmt_update->bindParam(':rol', $rol);

        if ($stmt_update->execute()) {
            echo "<script>alert('Usuario actualizado correctamente');</script>";
        } else {
            echo "<script>alert('Error al actualizar el usuario');</script>";
        }
    }

    // Consulta SQL para obtener todos los usuarios
    $consulta_sql = "SELECT cedula, correo, contraseña, rol, fecha_creacion, nombres, apellidos FROM usuarios";
    $consulta_stmt = $conexion->prepare($consulta_sql);
    $consulta_stmt->execute();
    $usuarios = $consulta_stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error en la conexión o consulta: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Lista de Usuarios</title>
   <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8; /* Gris muy claro para el fondo */
        color: #333;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #cc0000; /* Rojo para el título */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table thead {
        background-color: #000; /* Negro para el encabezado de la tabla */
        color: white;
    }

    table th,
    table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn {
        padding: 5px 10px;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        text-decoration: none;
        font-size: 14px;
        background-color: #cc0000; /* Rojo para los botones */
    }

    .btn:hover {
        background-color: #aa0000;
    }

    .btn-edit {
        background-color: #28a745;
    }

    .btn-delete {
        background-color: #dc3545;
    }

    .edit-form {
        display: none;
        background-color: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 10px;
    }

    input {
        padding: 5px;
        width: 100%;
        margin: 5px 0;
    }
</style>
    <script>
        function toggleEditForm(cedula) {
            let form = document.getElementById("edit-form-" + cedula);
            form.style.display = form.style.display === "none" ? "block" : "none";
        }
    </script>
</head>
<body>

<h1>Lista de Usuarios</h1>

<table>
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Fecha de Creación</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario['cedula']); ?></td>
                <td><?php echo htmlspecialchars($usuario['correo']); ?></td>
                <td><?php echo htmlspecialchars($usuario['contraseña']); ?></td>
                <td><?php echo htmlspecialchars($usuario['rol']); ?></td>
                <td><?php echo htmlspecialchars($usuario['fecha_creacion']); ?></td>
                <td><?php echo htmlspecialchars($usuario['nombres']); ?></td>
                <td><?php echo htmlspecialchars($usuario['apellidos']); ?></td>
                <td>
                    <button onclick="toggleEditForm('<?php echo $usuario['cedula']; ?>')" class="btn btn-edit">Editar</button>
                    <a href="eliminar_usuario.php?cedula=<?php echo urlencode($usuario['cedula']); ?>" class="btn btn-delete" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
                </td>
            </tr>
            <tr id="edit-form-<?php echo $usuario['cedula']; ?>" class="edit-form">
                <td colspan="8">
                    <form method="POST">
                        <input type="hidden" name="cedula" value="<?php echo $usuario['cedula']; ?>">
                        <label>Nombres:</label>
                        <input type="text" name="nombres" value="<?php echo htmlspecialchars($usuario['nombres']); ?>" required>

                        <label>Apellidos:</label>
                        <input type="text" name="apellidos" value="<?php echo htmlspecialchars($usuario['apellidos']); ?>" required>

                        <label>Correo:</label>
                        <input type="email" name="correo" value="<?php echo htmlspecialchars($usuario['correo']); ?>" required>

                        <label>Rol:</label>
                        <input type="text" name="rol" value="<?php echo htmlspecialchars($usuario['rol']); ?>" required>

                        <button type="submit" name="guardar_usuario" class="btn btn-edit">Guardar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>