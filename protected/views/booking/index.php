<?php
/* @var $this BookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Booking Models',
);

$this->menu=array(
	array('label'=>'Create BookingModel', 'url'=>array('create')),
	array('label'=>'Manage BookingModel', 'url'=>array('admin')),
);
?>

<h1>Booking Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
