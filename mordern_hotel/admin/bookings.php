<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit();
}

require_once '../config/database.php';

$result = mysqli_query(
    $conn,
    "SELECT bookings.*, rooms.room_name
     FROM bookings
     INNER JOIN rooms
     ON bookings.room_id = rooms.id
     ORDER BY bookings.id DESC"
);

if (!$result) {
    die("Bookings Query Error: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>

<html>
<head>
<title>Manage Bookings</title>

<style>
body{
font-family:Arial,sans-serif;
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
text-align:left;
}

th{
background:#111;
color:gold;
}

h1{
margin-bottom:20px;
}
</style>

</head>
<body>

<h1>Hotel Bookings</h1>

<table>

<tr>
<th>ID</th>
<th>Guest</th>
<th>Email</th>
<th>Phone</th>
<th>Room</th>
<th>Check In</th>
<th>Check Out</th>
<th>Guests</th>
<th>Total</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['guest_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['room_name']; ?></td>
<td><?php echo $row['checkin']; ?></td>
<td><?php echo $row['checkout']; ?></td>
<td><?php echo $row['guests']; ?></td>
<td>$<?php echo $row['total_amount']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
