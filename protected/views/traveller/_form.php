<?php
/* @var $this TravellerController */
/* @var $model TravellerModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'traveller-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'traveller_name'); ?>
		<?php echo $form->textField($model,'traveller_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'traveller_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'traveller_email'); ?>
		<?php echo $form->textField($model,'traveller_email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'traveller_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'traveller_password'); ?>
		<?php echo $form->textField($model,'traveller_password',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'traveller_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'traveller_level'); ?>
		<?php echo $form->textField($model,'traveller_level'); ?>
		<?php echo $form->error($model,'traveller_level'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->