<?php
/* @var $this BookingController */
/* @var $model BookingModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'booking_id'); ?>
		<?php echo $form->textField($model,'booking_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'booking_place_id'); ?>
		<?php echo $form->textField($model,'booking_place_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'booking_traveller_id'); ?>
		<?php echo $form->textField($model,'booking_traveller_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'booking_amount'); ?>
		<?php echo $form->textField($model,'booking_amount',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->