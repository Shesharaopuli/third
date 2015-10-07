<?php
/* @var $this TravellerController */
/* @var $model TravellerModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'traveller_id'); ?>
		<?php echo $form->textField($model,'traveller_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'traveller_name'); ?>
		<?php echo $form->textField($model,'traveller_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'traveller_email'); ?>
		<?php echo $form->textField($model,'traveller_email',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'traveller_level'); ?>
		<?php echo $form->textField($model,'traveller_level'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->