<?php

require_once 'config/database.php';

$error = "";

if(isset($_POST['book_room']))
{
    $guest_name = trim($_POST['guest_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $room_id = (int)$_POST['room_id'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = (int)$_POST['guests'];

    if(strtotime($checkout) <= strtotime($checkin))
    {
        $error = "Check-out date must be after check-in date.";
    }
    else
    {
        $roomQuery = mysqli_query(
            $conn,
            "SELECT * FROM rooms WHERE id='$room_id'"
        );

        $room = mysqli_fetch_assoc($roomQuery);

        if($room)
        {
            $days = ceil(
                (strtotime($checkout) - strtotime($checkin))
                / (60 * 60 * 24)
            );

            $total = $days * $room['price'];

            $stmt = mysqli_prepare(
                $conn,
                "INSERT INTO bookings
                (
                    guest_name,
                    email,
                    phone,
                    room_id,
                    checkin,
                    checkout,
                    guests,
                    total_amount
                )
                VALUES
                (?,?,?,?,?,?,?,?)"
            );

            mysqli_stmt_bind_param(
                $stmt,
                "sssissid",
                $guest_name,
                $email,
                $phone,
                $room_id,
                $checkin,
                $checkout,
                $guests,
                $total
            );

            if(mysqli_stmt_execute($stmt))
            {
                header("Location: booking_success.php");
                exit();
            }
            else
            {
                $error = "Failed to save booking.";
            }
        }
        else
        {
            $error = "Selected room not found.";
        }
    }
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Your Stay - MH Hotel</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI,sans-serif;
}

body{
background:#f5f5f5;
}

header{
background:#111;
padding:20px;
text-align:center;
}

header h1{
color:gold;
}

.container{
max-width:900px;
margin:40px auto;
background:#fff;
padding:40px;
border-radius:10px;
box-shadow:0 0 20px rgba(0,0,0,.1);
}

h2{
margin-bottom:20px;
color:#111;
}

.form-group{
margin-bottom:15px;
}

label{
display:block;
margin-bottom:5px;
font-weight:bold;
}

input,
select{
width:100%;
padding:12px;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:15px;
background:gold;
border:none;
font-size:18px;
font-weight:bold;
cursor:pointer;
border-radius:5px;
}

button:hover{
background:#e6b800;
}

.error{
background:#dc3545;
color:#fff;
padding:15px;
margin-bottom:20px;
border-radius:5px;
}

</style>

</head>
<body>

<header>
<h1>MH Hotel Booking</h1>
</header>

<div class="container">

<h2>Reserve Your Room</h2>

<?php if($error){ ?>

<div class="error">
<?php echo $error; ?>
</div>
<?php } ?>

<form method="POST">

<div class="form-group">
<label>Full Name</label>
<input
type="text"
name="guest_name"
required>
</div>

<div class="form-group">
<label>Email</label>
<input
type="email"
name="email"
required>
</div>

<div class="form-group">
<label>Phone Number</label>
<input
type="text"
name="phone"
required>
</div>

<div class="form-group">
<label>Select Room</label>

<select name="room_id" required>

<option value="">
Choose Room
</option>

<?php

$rooms = mysqli_query(
    $conn,
    "SELECT * FROM rooms ORDER BY room_name ASC"
);

while($row = mysqli_fetch_assoc($rooms))
{
?>

<option value="<?php echo $row['id']; ?>">
<?php echo $row['room_name']; ?>
 - $
<?php echo $row['price']; ?>
/night
</option>

<?php } ?>

</select>

</div>

<div class="form-group">
<label>Check-In Date</label>
<input
type="date"
name="checkin"
required>
</div>

<div class="form-group">
<label>Check-Out Date</label>
<input
type="date"
name="checkout"
required>
</div>

<div class="form-group">
<label>Guests</label>
<input
type="number"
name="guests"
min="1"
required>
</div>

<button
type="submit"
name="book_room">
Book Now </button>

</form>

</div>

</body>
</html>
