<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $direccion = $_POST["direccion"];

    // Paso 1: Establecer la conexión con la base de datos
    $servername = "127.0.0.1"; 
    $username = "'ivan1'"; 
    $password = "i8@Dd8uewNvk9tu"; 
    $dbname = "theo"; 

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Error al conectar a la base de datos: " . $conn->connect_error);
    }

    // Paso 2: Crear la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO datos_personales (nombre, telefono, correo, direccion) 
            VALUES ('$nombre', '$telefono', '$correo', '$direccion')";

    // Ejecutar la consulta y verificar si se insertaron los datos correctamente
    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la base de datos.";
    } else {
        echo "Error al insertar datos: " . $conn->error;
    }

    // Paso 3: Cerrar la conexión
    $conn->close();
}
?>
