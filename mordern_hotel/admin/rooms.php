<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit();
}

require_once '../config/database.php';

$rooms = mysqli_query(
    $conn,
    "SELECT * FROM rooms ORDER BY id DESC"
);

?>

<!DOCTYPE html>

<html>
<head>
<title>Rooms</title>

<style>
body{
font-family:Arial;
padding:20px;
background:#f5f5f5;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th,td{
padding:12px;
border:1px solid #ddd;
}

th{
background:#111;
color:gold;
}
</style>

</head>
<body>

<h1>Hotel Rooms</h1>

<table>

<tr>
<th>ID</th>
<th>Room Name</th>
<th>Price</th>
</tr>

<?php while($row = mysqli_fetch_assoc($rooms)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['room_name']; ?></td>
<td>$<?php echo $row['price']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
