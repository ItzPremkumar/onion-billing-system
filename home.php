<!DOCTYPE html>
<html>
<head>
<title>Vaishnavi Traders</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* ---------- GENERAL ---------- */
body {
    font-family: 'Segoe UI', sans-serif;
    padding-top: 80px; /* For fixed navbar */
}

/* ---------- NAVBAR ---------- */
.navbar {
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.brand-text {
     font-style:oblique;
    color: #c62828;
    font-size: 22px;
}

.custom-link {
    color: #c62828 !important;
    font-weight: 600;
    margin-left: 15px;
    transition: 0.3s;
}

.custom-link:hover {
    color: #2e7d32 !important;
    transform: scale(1.05);
}

/* ---------- HERO SECTION ---------- */
.hero {
    height: 100vh;
    background: url('bglogo.png') no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
    color: white;
}

/* Dark overlay for better text visibility */
.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.55);
}

.hero-content {
    position: relative;
    z-index: 2;
}
/* HERO BUTTON STYLE */
.hero-btn {
    background-color: #ffa726;   /* Light Orange */
    border: none;
    color: white;
    padding: 14px 35px;
    font-size: 18px;
    border-radius: 50px;   /* Rounded button */
    font-weight: 600;
    transition: 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    text-decoration: none;
}

.hero-btn:hover {
    background-color: #fb8c00;   /* Darker orange */
    transform: scale(1.08);
    color: white;
}
/* ---------- ABOUT SECTION ---------- */
.section-title {
    color: #2e7d32;
    font-weight: bold;
}

/* ---------- CONTACT SECTION ---------- */
.contact-section {
    background: #f8f9fa;
    padding: 60px 0;
}

/* ---------- FOOTER ---------- */
.footer {
    background: #1b5e20;
    color: white;
    padding: 15px;
    text-align: center;
}

</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
<div class="container">

<a class="navbar-brand d-flex align-items-center fw-bold" href="#">
    <img src="logo.png" alt="Logo" height="45" class="me-2">
    <span class="brand-text">Vaishnavi Traders</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link custom-link" href="home.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link custom-link" href="login.php">Login</a>
</li>

<li class="nav-item">
<a class="nav-link custom-link" href="#about">About Us</a>
</li>

<li class="nav-item">
<a class="nav-link custom-link" href="#contact">Contact Us</a>
</li>

</ul>
</div>

</div>
</nav>

<!-- HERO SECTION -->
<section class="hero">
<div>
<a href="login.php" class="hero-btn mt-4">Admin Login</a></div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="container mt-5 mb-5 text-center">
<h2 class="section-title">About Us</h2>
<p class="mt-3">
Vaishnavi Traders is a trusted onion merchant business located at 
Market Yard, Shrirampur. We provide efficient billing and transaction 
management using our modern billing system.
</p>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="contact-section text-center">
<div class="container">
<h2 class="section-title">Contact Us</h2>
<p class="mt-3">
Owner: Ravindra Harar<br>
Mobile: 9860640839<br>
Address: Market Yard, Shrirampur - 413709
</p>
</div>
</section>

<!-- FOOTER -->
<div class="footer">
© 2026 Vaishnavi Traders | Onion Merchant Billing System
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>