<?php
/* @var $this TravellerController */
/* @var $data TravellerModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('traveller_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->traveller_id), array('view', 'id'=>$data->traveller_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traveller_name')); ?>:</b>
	<?php echo CHtml::encode($data->traveller_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traveller_email')); ?>:</b>
	<?php echo CHtml::encode($data->traveller_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traveller_password')); ?>:</b>
	<?php echo CHtml::encode($data->traveller_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traveller_level')); ?>:</b>
	<?php echo CHtml::encode($data->traveller_level); ?>
	<br />


</div>