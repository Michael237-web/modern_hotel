<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit();
}

require_once '../config/database.php';

$messages = mysqli_query(
    $conn,
    "SELECT * FROM contact_messages ORDER BY id DESC"
);

?>

<!DOCTYPE html>

<html>
<head>
<title>Messages</title>

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

<h1>Customer Messages</h1>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
</tr>

<?php while($row = mysqli_fetch_assoc($messages)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['message']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
