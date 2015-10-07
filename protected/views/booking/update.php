<?php
/* @var $this BookingController */
/* @var $model BookingModel */

$this->breadcrumbs=array(
	'Booking Models'=>array('index'),
	$model->booking_id=>array('view','id'=>$model->booking_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookingModel', 'url'=>array('index')),
	array('label'=>'Create BookingModel', 'url'=>array('create')),
	array('label'=>'View BookingModel', 'url'=>array('view', 'id'=>$model->booking_id)),
	array('label'=>'Manage BookingModel', 'url'=>array('admin')),
);
?>

<h1>Update BookingModel <?php echo $model->booking_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>