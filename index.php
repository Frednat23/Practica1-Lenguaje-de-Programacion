<?php
// Primero verifico si el formulario realmente se envió por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Capturo los datos que vienen del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    try {
        $conexion_pdo = new PDO("mysql:host=localhost;dbname=universidad", "usuario", "contraseña");
        
        
        $sql = "INSERT INTO alumnos (nombre, correo, edad) VALUES (:nombre, :correo, :edad)";
        
        $stmt = $conexion_pdo->prepare($sql);
        $stmt->execute([
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':edad'   => $edad
        ]);

        echo "<p>¡Alumno registrado con exito!</p>";

    } catch (PDOException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Alumnos</title>
</head>
<body>
    <h2>Registrar Nuevo Alumno</h2>
    <!-- El formulario se enviará por POST a este mismo archivo -->
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>