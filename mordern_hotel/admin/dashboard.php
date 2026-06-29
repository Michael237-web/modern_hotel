<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit();
}

require_once '../config/database.php';

$roomsQuery = mysqli_query($conn, "SELECT * FROM rooms");
$rooms = mysqli_num_rows($roomsQuery);

$bookingsQuery = mysqli_query($conn, "SELECT * FROM bookings");
$bookings = mysqli_num_rows($bookingsQuery);

$messagesQuery = mysqli_query($conn, "SELECT * FROM contact_messages");
$messages = mysqli_num_rows($messagesQuery);

?>

<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI,sans-serif;
}

body{
background:#f4f4f4;
}

header{
background:#111;
padding:20px;
color:white;
display:flex;
justify-content:space-between;
align-items:center;
}

header h2{
color:gold;
}

.container{
padding:30px;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
margin-bottom:30px;
}

.card{
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.1);
text-align:center;
}

.card h1{
color:gold;
font-size:40px;
}

.card p{
margin-top:10px;
font-weight:bold;
}

.links{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
}

.links a{
background:#111;
color:white;
padding:20px;
text-decoration:none;
text-align:center;
border-radius:10px;
font-weight:bold;
transition:.3s;
}

.links a:hover{
background:gold;
color:black;
}

</style>

</head>
<body>

<header>
<h2>MH Hotel Admin Panel</h2>
<p>Welcome, <?php echo $_SESSION['admin']; ?></p>
</header>

<div class="container">

<div class="cards">

<div class="card">
<h1><?php echo $rooms; ?></h1>
<p>Total Rooms</p>
</div>

<div class="card">
<h1><?php echo $bookings; ?></h1>
<p>Total Bookings</p>
</div>

<div class="card">
<h1><?php echo $messages; ?></h1>
<p>Total Messages</p>
</div>

</div>

<div class="links">

<a href="rooms.php">
Manage Rooms
</a>

<a href="bookings.php">
View Bookings
</a>

<a href="messages.php">
View Messages
</a>

<a href="logout.php">
Logout
</a>

</div>

</div>

</body>
</html>
