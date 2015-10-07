<?php
/* @var $this BookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Booking Models',
);

?>

<h1>My Booking</h1>
	<?php
	
	echo "<table style='border:1px solid #000;'><tr>
	    <th>Booking Id</th>
	    <th>Booking Price</th> </tr>";
		foreach ($result as $row)
		{
		echo"<tr>";	
		echo "<td>".$row['booking_id']."</td>";
		echo "<td>".$row['booking_amount']."</td>";
		echo "</tr>";
		}
	echo "</table>";
	?>

 