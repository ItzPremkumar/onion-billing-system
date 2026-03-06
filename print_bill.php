<?php
include "db.php";

$id = $_GET['id'];

$query = pg_query($conn,"
SELECT b.*, 
       f.name AS farmer_name,
       p.name AS party_name
FROM bill b
LEFT JOIN farmer f ON b.farmer_id = f.farmer_id
LEFT JOIN party p ON b.party_id = p.party_id
WHERE b.bill_id = $id
");

$row = pg_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Print Invoice</title>
<style>
body{font-family:Arial;}
.invoice{
    width:900px;
    margin:20px auto;
    border:1px solid black;
    padding:15px;
}
table{
    width:100%;
    border-collapse:collapse;
}
table, th, td{
    border:1px solid black;
}
th, td{
    padding:6px;
    font-size:14px;
}
.right{text-align:right;}
.center{text-align:center;}
@media print{
    button{display:none;}
}
</style>
</head>

<body>

<div class="invoice">

<h3 style="text-align:center;">|| श्री || </h3>
<h2 style="text-align:center;">VAISHNAVI TRADERS</h2>
<p style="text-align:center;">
Market Yard, Shrirampur - 413709<br>
Owner: Ravindra Harar | Mobile: 9860640839
</p>

<hr>

<table>
<tr>
<td><strong>Bill No:</strong> <?php echo $row['bill_id']; ?></td>
<td><strong>Date:</strong> <?php echo $row['bill_date']; ?></td>
</tr>
<tr>
<td>
<?php if($row['type']=="Farmer"){ ?>
Farmer: <?php echo $row['farmer_name']; ?>
<?php } ?>
<?php if($row['type']=="Party"){ ?>
Party: <?php echo $row['party_name']; ?>
<?php } ?>
</td>
<td>Status: <?php echo $row['payment_status']; ?></td>
</tr>
</table>

<br>

<table>
<tr>
<th>S.No</th>
<th>Description</th>
<th>Total Bags</th>
<th>Net Weight</th>
<th>Rate</th>
<th>Amount</th>
</tr>

<tr>
<td class="center">1</td>
<td>ONION BAGS</td>
<td class="center"><?php echo $row['total_bags']; ?></td>
<td class="center"><?php echo $row['net_weight']; ?></td>
<td class="center"><?php echo $row['rate']; ?></td>
<td class="right"><?php echo number_format($row['amount'],2); ?></td>
</tr>
</table>

<br>

<table>
<tr>
<td class="right">
Amount: ₹<?php echo number_format($row['amount'],2); ?><br>

<?php if($row['type']=="Party"){ ?>
Commission: ₹<?php echo number_format($row['commission'],2); ?><br>
Total Before Discount:
₹<?php echo number_format($row['amount'] + $row['commission'],2); ?><br>
<?php } ?>

Discount (2%):
₹<?php echo number_format($row['discount_amount'],2); ?><br>

<strong>Final Amount:
₹<?php echo number_format($row['final_amount'],2); ?></strong>
</td>
</tr>
</table>

<br><br>

<table>
<tr>
<td width="60%">
Bank Details:<br>
NO DETAILS</td>
<td width="40%" class="center">
For VAISHNAVI TRADERS<br><br><br><br>
Authorised Signatory
</td>
</tr>
</table>

<br>

<div style="text-align:center;">
<button onclick="window.print()">Print</button>
</div>

</div>

</body>
</html>