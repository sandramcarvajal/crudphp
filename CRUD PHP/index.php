<?php
include('connection.php');
$con = connection();
$sql = "SELECT * FROM usuario";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Usuarios</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

  <div class="main-container">
    
    <!-- Formulario -->
    <div class="form-container">
      <form action="insert_user.php" method="post">
        <h1>Crear Usuario</h1>

        <input type="text" name="name" placeholder="Nombre" required>
        <input type="text" name="lastname" placeholder="Apellido" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" required>

        <input type="submit" value="Agregar Usuario">
      </form>
    </div>

    <!-- Tabla de usuarios -->
    <div class="table-container">
      <h2>Usuarios Registrados</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($fila = mysqli_fetch_array($query)) { ?>
            <tr>
              <td><?php echo $fila['id']; ?></td>
              <td><?php echo $fila['name']; ?></td>
              <td><?php echo $fila['lastname']; ?></td>
              <td><?php echo $fila['username']; ?></td>
              <td><?php echo $fila['password']; ?></td>
              <td><?php echo $fila['email']; ?></td>
              <td>
                <a href="update.php?id=<?php echo $fila['id']; ?>" class="btn btn-edit">Editar</a>
              </td>
              <td>
                <a href="delete_user.php?id=<?php echo $fila['id']; ?>" class="btn btn-delete" 
                onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>
