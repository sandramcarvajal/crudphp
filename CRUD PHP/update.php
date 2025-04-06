<?php
include('connection.php');
$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM usuario where id='$id'";
$query = mysqli_query($con, $sql); 
$row = mysqli_fetch_array($query);
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
      <form action="edit_user.php" method="post">
        <h1>Editar Usuario</h1>
        <input type="hidden" name="id" placeholder="Nombre" required value="<?= $row['id']?>"> 
        <input type="text" name="name" placeholder="Nombre" required value="<?= $row['name']?>">
        <input type="text" name="lastname" placeholder="Apellido" required value="<?= $row['lastname']?>">
        <input type="text" name="username" placeholder="Username" required value="<?= $row['username']?>">
        <input type="password" name="password" placeholder="Password" required value="<?= $row['password']?>">
        <input type="email" name="email" placeholder="Email" required value="<?= $row['email']?>">

        <input type="submit" value="actualizar Usuario">
      </form>
    </div>



  </div>

</body>
</html>
