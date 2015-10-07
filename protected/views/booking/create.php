<?php
/* @var $this BookingController */
/* @var $model BookingModel */

$this->breadcrumbs=array(
	'Booking Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookingModel', 'url'=>array('index')),
	array('label'=>'Manage BookingModel', 'url'=>array('admin')),
);
?>

<h1>Create BookingModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>