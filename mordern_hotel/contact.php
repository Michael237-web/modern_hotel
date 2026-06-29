<?php
include 'config/database.php';

$success = "";
$error = "";

if(isset($_POST['send_message']))
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO contact_messages
        (name,email,phone,message)
        VALUES (?,?,?,?)"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "ssss",
        $name,
        $email,
        $phone,
        $message
    );

    if(mysqli_stmt_execute($stmt))
    {
        $success = "Message sent successfully!";
    }
    else
    {
        $error = "Failed to send message.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Contact MH Hotel</title>

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
box-shadow:0 0 15px rgba(0,0,0,.1);
}

h2{
margin-bottom:20px;
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
textarea{
width:100%;
padding:12px;
border:1px solid #ccc;
border-radius:5px;
}

textarea{
height:150px;
resize:none;
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

.success{
background:#28a745;
color:white;
padding:15px;
margin-bottom:20px;
border-radius:5px;
}

.error{
background:#dc3545;
color:white;
padding:15px;
margin-bottom:20px;
border-radius:5px;
}

.contact-info{
margin-top:40px;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
gap:20px;
}

.card{
background:#fafafa;
padding:20px;
border-radius:10px;
text-align:center;
}

.card h3{
color:#111;
margin-bottom:10px;
}

footer{
background:#111;
color:white;
text-align:center;
padding:20px;
margin-top:40px;
}

</style>
</head>
<body>

<header>
<h1>MH Hotel</h1>
</header>

<div class="container">

<h2>Contact Us</h2>

<?php if($success){ ?>
<div class="success">
<?php echo $success; ?>
</div>
<?php } ?>

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
name="name"
required>
</div>

<div class="form-group">
<label>Email Address</label>
<input
type="email"
name="email"
required>
</div>

<div class="form-group">
<label>Phone Number</label>
<input
type="text"
name="phone">
</div>

<div class="form-group">
<label>Your Message</label>
<textarea
name="message"
required></textarea>
</div>

<button
type="submit"
name="send_message">
Send Message
</button>

</form>

<div class="contact-info">

<div class="card">
<h3>📍 Address</h3>
<p>Nairobi, Kenya</p>
</div>

<div class="card">
<h3>📞 Phone</h3>
<p>+254 700 000 000</p>
</div>

<div class="card">
<h3>✉ Email</h3>
<p>info@mhhotel.com</p>
</div>

</div>

</div>

<footer>
© 2026 MH Hotel. All Rights Reserved.
</footer>

</body>
</html>