<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Use lowercase table name
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = pg_query($conn, $query);

if ($result && pg_num_rows($result) == 1) {
    $_SESSION['admin'] = $username;   // ✅ lowercase session name
    $success = true;
} else {
    $success = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Status</title>
    <style>
        body{
            margin:0;
            font-family:'Segoe UI', Arial;
            background:#f0f3f8;
        }
        .card{
            width:420px;
            margin:120px auto;
            background:white;
            padding:35px;
            border-radius:16px;
            box-shadow:0 8px 20px rgba(0,0,0,0.15);
            text-align:center;
        }
        .icon-success{
            font-size:60px;
            color:#2ecc71;
        }
        .icon-error{
            font-size:60px;
            color:#e74c3c;
        }
        h2{
            margin-bottom:10px;
        }
        .success{
            color:#2ecc71;
        }
        .error{
            color:#e74c3c;
        }
        p{
            color:#555;
            margin-bottom:25px;
        }
        .btn{
            display:inline-block;
            background:#4a00e0;
            color:white;
            padding:10px 22px;
            border-radius:25px;
            text-decoration:none;
            font-size:15px;
        }
        .btn:hover{
            background:#3711c8;
        }
    </style>
</head>

<body>

<div class="card">
<?php if ($success) { ?>
    <div class="icon-success">✔</div>
    <h2 class="success">Login Successful</h2>
    <p>Welcome, <b><?php echo htmlspecialchars($username); ?></b></p>
    <a class="btn" href="dashboard.php">Go to Dashboard</a>
<?php } else { ?>
    <div class="icon-error">✖</div>
    <h2 class="error">Login Failed</h2>
    <p>Invalid username or password</p>
    <a class="btn" href="login.php">Try Again</a>
<?php } ?>
</div>

</body>
</html>