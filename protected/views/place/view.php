<?php
/* @var $this PlaceController */
/* @var $model PlaceModel */

$this->breadcrumbs=array(
	'Place Models'=>array('index'),
	$model->place_id,
);

$this->menu=array(
	array('label'=>'List PlaceModel', 'url'=>array('index')),
	array('label'=>'Create PlaceModel', 'url'=>array('create')),
	array('label'=>'Update PlaceModel', 'url'=>array('update', 'id'=>$model->place_id)),
	array('label'=>'Delete PlaceModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->place_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlaceModel', 'url'=>array('admin')),
);
?>

<h1>Place Details</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'place_id',
		'place_name',
		'place_address',
		'place_price',
	),
)); ?>
