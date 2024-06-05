<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Materias</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Gestión de Materias</h2>
        <!-- Formulario de búsqueda -->
        <form action="" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre de materia">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>
        <!-- Lista de materias -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir la clase Materias
                require_once "../modelo/Materias.php";

                // Instanciar la clase Materias
                $materias = new Materias();

                // Verificar si se ha enviado un término de búsqueda
                if(isset($_GET['nombre'])){
                    $nombre = $_GET['nombre'];
                    $resultado = $materias->buscar($nombre);
                } else {
                    // Si no hay búsqueda, listar todas las materias
                    $resultado = $materias->listar();
                }

                // Mostrar las materias
                while($row = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nombre']."</td>";
                    echo "<td>".$row['profesor']."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
