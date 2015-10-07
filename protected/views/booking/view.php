<?php
/* @var $this BookingController */
/* @var $model BookingModel */

$this->breadcrumbs=array(
	'Booking Models'=>array('index'),
	$model->booking_id,
);

$this->menu=array(
	array('label'=>'List BookingModel', 'url'=>array('index')),
	array('label'=>'Create BookingModel', 'url'=>array('create')),
	array('label'=>'Update BookingModel', 'url'=>array('update', 'id'=>$model->booking_id)),
	array('label'=>'Delete BookingModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->booking_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookingModel', 'url'=>array('admin')),
);
?>
<h1>You Booking is Success</h1>
<h3>Your Booking Details are:</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'booking_id',
		'booking_place_id',
		'booking_traveller_id',
		'booking_amount',
	),
)); ?>
