<?php
/* @var $this TravellerController */
/* @var $model TravellerModel */

$this->breadcrumbs=array(
	'Traveller Models'=>array('index'),
	$model->traveller_id,
);

$this->menu=array(
	array('label'=>'List TravellerModel', 'url'=>array('index')),
	array('label'=>'Create TravellerModel', 'url'=>array('create')),
	array('label'=>'Update TravellerModel', 'url'=>array('update', 'id'=>$model->traveller_id)),
	array('label'=>'Delete TravellerModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->traveller_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TravellerModel', 'url'=>array('admin')),
);
?>

<h1>View TravellerModel #<?php echo $model->traveller_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'traveller_id',
		'traveller_name',
		'traveller_email',
		'traveller_password',
		'traveller_level',
	),
)); ?>
