<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking Successful - MH Hotel</title>

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
min-height:100vh;
padding:20px;
}

.card{
background:white;
padding:50px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,.1);
text-align:center;
max-width:600px;
width:100%;
}

.icon{
font-size:70px;
margin-bottom:20px;
}

h1{
color:#28a745;
margin-bottom:15px;
}

p{
color:#555;
line-height:1.8;
margin-bottom:15px;
}

.buttons{
margin-top:25px;
display:flex;
justify-content:center;
gap:15px;
flex-wrap:wrap;
}

.btn{
display:inline-block;
padding:12px 25px;
text-decoration:none;
border-radius:6px;
font-weight:bold;
transition:.3s;
}

.home{
background:gold;
color:black;
}

.home:hover{
background:#e6b800;
}

.booking{
background:#111;
color:white;
}

.booking:hover{
background:#333;
}

.contact{
margin-top:25px;
padding-top:20px;
border-top:1px solid #ddd;
font-size:14px;
color:#666;
}

</style>

</head>
<body>

<div class="card">

<div class="icon">✅</div>

<h1>Booking Successful!</h1>

<p>
Thank you for choosing MH Hotel.
Your reservation request has been received successfully.
</p>

<p>
Our reservations team will review your booking and contact you shortly with confirmation details.
</p>

<div class="buttons">

<a href="index.php" class="btn home">
Return Home
</a>

<a href="booking.php" class="btn booking">
Book Another Room
</a>

</div>

<div class="contact">

<p>
Need assistance?
</p>

<p>
📞 +254 700 000 000
</p>

<p>
✉ info@mhhotel.com
</p>

</div>

</div>

</body>
</html>
