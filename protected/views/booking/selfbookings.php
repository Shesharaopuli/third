<?php
/* @var $this BookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Booking Models',
);

?>

<h1>My Booking</h1>
	<?php
		echo "<style type='text/css'>th,td{text-align:center}td{border:1px solid #000;}</style>";
		echo "<table style='border:1px solid #000;'><tr>
	    <th>Booking Id</th>
	    <th>Place Name</th><th>Place Address</th><th>Booking Price</th> </tr>";
		foreach ($result as $row)
		{
		echo"<tr>";	
		echo "<td>".$row['booking_id']."</td>";
		echo "<td>".$row['place_name']."</td>";
		echo "<td>".$row['place_address']."</td>";
		echo "<td>".$row['booking_amount']."</td>";
		echo "</tr>";
		}
	echo "</table>";
	?>

 