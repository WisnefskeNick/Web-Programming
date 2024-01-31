<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Summary</title>
<link href="Styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
	if($_POST["item"] && $_POST["fname"] && $_POST["lname"] && $_POST["street"] && $_POST["City"] && $_POST["states"] && $_POST["Zip"]) 
	{
		$item=$_POST["item"];
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$street=$_POST["street"];
		$City=$_POST["City"];
		$states=$_POST["states"];
		$Zip=$_POST["Zip"];
		$total=0;
		$shipping=0;
	?>
		<div id="Wrapper">
		<table>
			<tr>
				<td colspan="2" class="form-center">
					<div class="header">
					<h1>Order Summary</h1>
					<p>Thank you <?= $fname ?></p>
					<p><?= $street ?></p>
					<p><?= $City ?>, <?= $states ?> <?= $Zip ?></p>
					<p>You ordered the following</p>
					</div>
				</td>
			</tr>
		
			<tr>
				<th>Item</th>
				<th>Price</th>
			</tr>	
		<?php
		
		foreach ($item as $item=>$price) {
		?>
			<tr>
				<td><?= $item ?></td>
				<td><?= $price ?></td>
			</tr>
		<?php
		$total+=$price;
		}
		
		if ($total<1000) {
			$shipping=25;
		}
		elseif ($total<2000) {
			$shipping=50;
		}
		else {
			$shipping=100;
		}
		$total+=$shipping;
		?>
		<tr>
			<td>Shipping</td>
			<td><?= $shipping ?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td><?= $total ?></td>
		</tr>
	</table>
	<?php
	}
	else {
		?>
			<a href="Index.html"> Go back and Complete the form properly</a>
		<?php
	}
?>
		</div>
</body>
</html>