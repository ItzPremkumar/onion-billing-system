<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard - Vaishnavi Traders</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* ---------- BODY ---------- */
/* ---------- BODY BACKGROUND IMAGE ---------- */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: url('logo2.png') no-repeat center center fixed;
    background-size: cover;
}

/* Dark overlay */
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: -1;
}

/* ---------- TOP NAVBAR ---------- */
.topbar {
    height: 60px;
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(5px);
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}

.topbar h4 {
    color: #c62828;
    margin: 0;
}

/* ---------- SIDEBAR ---------- */
.sidebar {
    position: fixed;
    top: 60px;
    left: 0;
    width: 230px;
    height: 100%;
    background: rgba(198,40,40,0.95);
    padding-top: 20px;
}

.sidebar a {
    display: block;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    transition: 0.3s;
}

.sidebar a:hover {
    background: #8e0000;
    padding-left: 25px;
}

/* ---------- MAIN CONTENT ---------- */
.main-content {
    margin-left: 230px;
    margin-top: 60px;
    padding: 30px;
}

.card-box {
    background: rgba(255,255,255,0.95);
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}

/* ---------- SIDEBAR ---------- */
.sidebar {
    position: fixed;
    top: 60px;
    left: 0;
    width: 230px;
    height: 100%;
    background: #c62828;
    padding-top: 20px;
}

.sidebar a {
    display: block;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    transition: 0.3s;
}

.sidebar a:hover {
    background: #8e0000;
    padding-left: 25px;
}

/* ---------- MAIN CONTENT ---------- */
.main-content {
    margin-left: 230px;
    margin-top: 60px;
    padding: 30px;
}

.card-box {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

</style>
</head>

<body>

<!-- TOP NAVBAR -->
<div class="topbar">
    <h4> Vaishnavi Traders</h4>
    <div>
        Welcome, <b><?php echo $_SESSION['admin']; ?></b>
    </div>
</div>

<!-- SIDEBAR -->
<div class="sidebar">
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="bill.php">🧾 Create Bill</a>
    <a href="farmer.php">👨‍🌾 Farmer</a>
    <a href="onion_party.php">🏢 Onion Party</a>
    <a href="employee.php">👷 Employee</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="card-box">
        <h2>Dashboard</h2>
        <p>Welcome to Vaishnavi Traders Onion Merchant Billing System.</p>
        <p>Onion Merchant & Commision Agent.</p>
    </div>
</div>

</body>
</html>