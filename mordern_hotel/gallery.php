<?php
$images = [
    "https://images.unsplash.com/photo-1566073771259-6a8506099945",
    "https://images.unsplash.com/photo-1582719508461-905c673771fd",
    "https://images.unsplash.com/photo-1584132967334-10e028bd69f7",
    "https://images.unsplash.com/photo-1566665797739-1674de7a421a",
    "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b",
    "https://images.unsplash.com/photo-1578683010236-d716f9a3f461",
    "https://images.unsplash.com/photo-1445019980597-93fa8acb246c",
    "https://images.unsplash.com/photo-1522798514-97ceb8c4f1c8",
    "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb",
    "https://images.unsplash.com/photo-1551882547-ff40c63fe5fa",
    "https://images.unsplash.com/photo-1455587734955-081b22074882",
    "https://images.unsplash.com/photo-1505691938895-1758d7feb511",
    "https://images.unsplash.com/photo-1520250497591-112f2f40a3f4",
    "https://images.unsplash.com/photo-1541971875076-8f970d573be6",
    "https://images.unsplash.com/photo-1505691723518-36a5ac3b1a1b",
    "https://images.unsplash.com/photo-1590490360182-c33d57733427"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MH Hotel Gallery</title>

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
font-size:40px;
}

.gallery{
max-width:1300px;
margin:40px auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:25px;
padding:20px;
}

.card{
overflow:hidden;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,0.15);
background:white;
}

.card img{
width:100%;
height:260px;
object-fit:cover;
transition:0.5s;
}

.card:hover img{
transform:scale(1.1);
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
<h1>MH Hotel Gallery</h1>
</header>

<div class="gallery">

<?php foreach($images as $img){ ?>

<div class="card">
    <img src="<?php echo $img; ?>" alt="Hotel Image">
</div>

<?php } ?>

</div>

<footer>
© 2026 MH Hotel. All Rights Reserved.
</footer>

</body>
</html>