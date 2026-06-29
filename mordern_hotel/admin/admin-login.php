<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once '../config/database.php';

$error = "";

if(isset($_POST['login']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = mysqli_prepare(
        $conn,
        "SELECT * FROM admins
         WHERE username=? AND password=?"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "ss",
        $username,
        $password
    );

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error = "Invalid Username or Password";
    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MH Hotel Admin Login</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI,sans-serif;
}

body{
background:#f5f5f5;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.card{
background:white;
padding:40px;
width:400px;
border-radius:10px;
box-shadow:0 0 20px rgba(0,0,0,.1);
}

h2{
text-align:center;
margin-bottom:20px;
color:#111;
}

input{
width:100%;
padding:12px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:gold;
border:none;
font-weight:bold;
cursor:pointer;
border-radius:5px;
font-size:16px;
}

button:hover{
background:#e6b800;
}

.error{
background:#dc3545;
color:white;
padding:10px;
margin-bottom:15px;
border-radius:5px;
text-align:center;
}

.back-link{
text-align:center;
margin-top:20px;
}

.back-link a{
text-decoration:none;
color:#111;
font-weight:bold;
transition:.3s;
}

.back-link a:hover{
color:gold;
}

</style>

</head>

<body>

<div class="card">

<h2>Admin Login</h2>

<?php if($error){ ?>

<div class="error">
<?php echo $error; ?>
</div>

<?php } ?>
<form method="POST">

<div style="text-align:center; margin-bottom:15px; color:red; font-weight:bold; font-size:14px;">
    ⚠️ Authorized Personnel Only!
</div>

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button
type="submit"
name="login">
Login </button>

</form>
<div class="back-link">

<a href="../index.php">
← Return to MH Hotel Website
</a>

</div>

</div>

</body>
</html>
