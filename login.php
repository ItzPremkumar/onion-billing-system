<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body{
            margin:0;
            font-family:'Segoe UI', Arial;
            background:linear-gradient(120deg,#8e2de2,#4a00e0);
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .login-card{
            background:white;
            width:420px;
            padding:35px;
            border-radius:16px;
            box-shadow:0 10px 25px rgba(0,0,0,0.25);
            text-align:center;
        }
        .icon{
            font-size:60px;
        }
        h2{
            color:#4a00e0;
            margin-bottom:10px;
        }
        p{
            color:#666;
            margin-bottom:25px;
        }
        .input-group{
            margin-bottom:18px;
            text-align:left;
        }
        .input-group label{
            font-size:14px;
            color:#555;
        }
        .input-group input{
            width:100%;
            padding:10px;
            margin-top:6px;
            border-radius:8px;
            border:1px solid #ccc;
            font-size:15px;
        }
        .btn{
            width:100%;
            background:#4a00e0;
            color:white;
            padding:12px;
            border:none;
            border-radius:25px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }
        .btn:hover{
            background:#3711c8;
            transform:scale(1.02);
        }
        .back{
            margin-top:20px;
        }
        .back a{
            text-decoration:none;
            color:#4a00e0;
            font-size:14px;
        }
    </style>
</head>

<body>

<div class="login-card">
    <div class="icon">🔐</div>
    <h2>Owner Login</h2>
    <p>Please login to access the billing system</p>

    <form action="login_check.php" method="post">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>

    <div class="back">
        <a href="home.php">← Back to Home</a>
    </div>
</div>

</body>
</html>