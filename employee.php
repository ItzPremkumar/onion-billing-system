<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

/* Insert Employee */
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $query = "INSERT INTO employee(name, address, mobile_no)
              VALUES('$name','$address','$mobile')";
    pg_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Management</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* ---------- BACKGROUND ---------- */
body {
    background: linear-gradient(135deg,#ffe0e6,#fff3e0);
    font-family: 'Segoe UI', sans-serif;
}

/* ---------- MAIN CARD ---------- */
.container-box {
    background: white;
    padding: 35px;
    margin-top: 60px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* ---------- TITLE ---------- */
.title {
    color: #ff7043; /* Light Orange */
    font-weight: bold;
}

/* ---------- BUTTON ---------- */
.btn-save {
    background: #ffb74d; /* Light Orange */
    border: none;
    color: white;
    font-weight: 600;
    transition: 0.3s;
}

.btn-save:hover {
    background: #ff9800;
    transform: scale(1.05);
}

/* ---------- TABLE HEADER ---------- */
.table thead {
    background: #f8bbd0; /* Light Pink */
    color: #333;
}

/* ---------- BACK BUTTON ---------- */
.btn-back {
    background: #f48fb1; /* Light Pink */
    border: none;
    color: white;
}

.btn-back:hover {
    background: #ec407a;
}

</style>

</head>

<body>

<div class="container">
<div class="container-box">

<h2 class="title text-center mb-4">👷 Employee Management</h2>

<!-- EMPLOYEE FORM -->
<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<label>Employee Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Mobile Number</label>
<input type="text" name="mobile" class="form-control" required>
</div>

<div class="col-md-12 mb-3">
<label>Address</label>
<textarea name="address" class="form-control" rows="2" required></textarea>
</div>

</div>

<button type="submit" name="save" class="btn btn-save w-100">
Save Employee
</button>

</form>

<hr class="my-4">

<!-- EMPLOYEE TABLE -->
<h4 class="mb-3" style="color:#ff7043;">Employee List</h4>

<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Mobile</th>
</tr>
</thead>

<tbody>

<?php
$result = pg_query($conn, "SELECT * FROM employee ORDER BY employee_id DESC");
while($row = pg_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['employee_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['mobile_no']; ?></td>
</tr>
<?php } ?>

</tbody>
</table>

<div class="text-center mt-3">
<a href="dashboard.php" class="btn btn-back">Back to Dashboard</a>
</div>

</div>
</div>

</body>
</html>