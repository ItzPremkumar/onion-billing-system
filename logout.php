<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<title>Logout - Vaishnavi Traders</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#ffe0e6,#fff3e0);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.logout-card{
    background:white;
    padding:40px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
    text-align:center;
    max-width:450px;
    animation: fadeIn 0.8s ease-in-out;
}

.icon{
    font-size:60px;
    color:#ff7043;
}

.title{
    color:#ff7043;
    font-weight:bold;
    margin-top:10px;
}

.btn-home{
    background:#ffb74d;
    border:none;
    color:white;
    padding:10px 25px;
    border-radius:25px;
    font-weight:600;
    transition:0.3s;
    text-decoration:none;
}

.btn-home:hover{
    background:#ff9800;
    transform:scale(1.05);
    color:white;
}

@keyframes fadeIn{
    from{ opacity:0; transform:translateY(-20px);}
    to{ opacity:1; transform:translateY(0);}
}
</style>

<!-- Auto Redirect after 5 seconds -->
<meta http-equiv="refresh" content="5;url=home.php">

</head>

<body>

<div class="logout-card">

<div class="icon">👋</div>

<h3 class="title">Logged Out Successfully</h3>

<p class="mt-3 text-muted">
Thank you for using Vaishnavi Traders Billing System.
</p>

<p class="text-muted">
You will be redirected to Home Page in 5 seconds...
</p>

<a href="home.php" class="btn-home mt-3 d-inline-block">
Go to Home
</a>

</div>

</body>
</html>