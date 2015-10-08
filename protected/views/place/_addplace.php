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
	'enableAjaxValidation'=>true,
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
		<button id='addplacebutton' > Create Place(Through AJAX)</button>
	</div>
	<p id='placeresult' class="error"></p>
<?php $this->endWidget(); ?>

</div><!-- form -->
<style type="text/css">p.error{color:red} p.success{color:green;}</style>
<script type=text/javascript>
function clear(){
	
	$("#place-model-form")[0].reset();
}
$(document).ready(function(){
		$("#place-model-form").submit(function(){
		return false;
		});
	$("#addplacebutton").click(function(){
			var data=$("#place-model-form").serializeArray();
			//PlaceModel_place_name,PlaceModel_place_address,PlaceModel_place_price
			//{PlaceModel_place_name:placename, PlaceModel_place_address:placeaddress,PlaceModel_place_price:placeprice}
			//var placename=$("#PlaceModel_place_name").val(),placeaddress=$("#PlaceModel_place_address").val(),placeprice=$("#PlaceModel_place_price").val();
			//alert(placename+placeaddress+placeprice);
			jQuery.ajax({
				'type' : 'POST',
				'url'  :'<?php echo Yii::app()->createUrl('place/AddPlaceAjax');?>',
				'async' : false,
				'data':data,
				'success' : function(result)
							{
								$("#placeresult").show().html(result);
							}
				
				
			});//end of Ajax submit
		clear();
		$("#placeresult").delay(3000).hide("slow");
		});
	
});//end of document.ready()



</script>
