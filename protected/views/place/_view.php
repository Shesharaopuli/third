<?php
/* @var $this PlaceController */
/* @var $data PlaceModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->place_id), array('view', 'id'=>$data->place_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_name')); ?>:</b>
	<?php echo CHtml::encode($data->place_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_address')); ?>:</b>
	<?php echo CHtml::encode($data->place_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place_price')); ?>:</b>
	<?php echo CHtml::encode($data->place_price); ?>
	<br />

	<form method="post" action="<?php echo Yii::app()->createUrl('/booking/BookMyPlace'); ?>" >
	<input type="hidden" name='placeid' value="<?php echo $data->place_id; ?>">
	<input type="hidden" name='placeprice'  value="<?php echo $data->place_price; ?>">
	<input type='submit' value='Book This Place'>
	</form>
</div>