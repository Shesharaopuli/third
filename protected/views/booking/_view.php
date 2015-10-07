<?php
/* @var $this BookingController */
/* @var $data BookingModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->booking_id), array('view', 'id'=>$data->booking_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_place_id')); ?>:</b>
	<?php echo CHtml::encode($data->booking_place_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_traveller_id')); ?>:</b>
	<?php echo CHtml::encode($data->booking_traveller_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booking_amount')); ?>:</b>
	<?php echo CHtml::encode($data->booking_amount); ?>
	<br />


</div>