<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

if(isset($_POST['save'])){

    $bill_date = $_POST['bill_date'];
    $type = $_POST['type'];

    $farmer_id = !empty($_POST['farmer_id']) ? $_POST['farmer_id'] : "NULL";
    $party_id  = !empty($_POST['party_id'])  ? $_POST['party_id']  : "NULL";

    $total_bags = $_POST['total_bags'];
    $net_weight = $_POST['net_weight'];
    $rate = $_POST['rate'];
    $payment_status = $_POST['payment_status'];

    $amount = $net_weight * $rate;

    $commission = 0;
    $total_before_discount = $amount;

    if($type == "Party"){
        $commission = $net_weight * 0.50;
        $total_before_discount = $amount + $commission;
    }

    $discount_amount = $total_before_discount * 0.02;
    $final_amount = $total_before_discount - $discount_amount;

    $query = "INSERT INTO bill
    (bill_date,type,farmer_id,party_id,total_bags,net_weight,rate,amount,commission,discount_amount,final_amount,payment_status)
    VALUES
    ('$bill_date',
     '$type',
     $farmer_id,
     $party_id,
     '$total_bags',
     '$net_weight',
     '$rate',
     '$amount',
     '$commission',
     '$discount_amount',
     '$final_amount',
     '$payment_status')";

    pg_query($conn,$query);

    // Get last inserted bill id
    $last_id_query = pg_query($conn,"SELECT currval(pg_get_serial_sequence('bill','bill_id'))");
    $last_id = pg_fetch_row($last_id_query);

    header("Location: print_bill.php?id=".$last_id[0]);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Bill</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Create Bill</h2>

<form method="POST">

<label>Bill Date</label>
<input type="date" name="bill_date" class="form-control" required><br>

<label>Type</label>
<select name="type" class="form-control" required>
<option value="Farmer">Farmer</option>
<option value="Party">Onion Party</option>
</select><br>

<label>Farmer ID</label>
<input type="number" name="farmer_id" class="form-control"><br>

<label>Party ID</label>
<input type="number" name="party_id" class="form-control"><br>

<label>Total Bags</label>
<input type="number" name="total_bags" class="form-control" required><br>

<label>Net Weight</label>
<input type="number" step="0.01" name="net_weight" class="form-control" required><br>

<label>Rate</label>
<input type="number" step="0.01" name="rate" class="form-control" required><br>

<label>Status</label>
<select name="payment_status" class="form-control">
<option>Paid</option>
<option>Unpaid</option>
</select><br>

<button type="submit" name="save" class="btn btn-primary">
Generate Bill
</button>

</form>

</body>
</html>