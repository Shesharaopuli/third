<?php
/* @var $this PlaceController */
/* @var $model PlaceModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'place-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'place_name'); ?>
		<?php echo $form->textField($model,'place_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'place_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_address'); ?>
		<?php echo $form->textField($model,'place_address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'place_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_price'); ?>
		<?php echo $form->textField($model,'place_price',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'place_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->