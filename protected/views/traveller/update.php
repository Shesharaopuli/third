<?php
/* @var $this TravellerController */
/* @var $model TravellerModel */

$this->breadcrumbs=array(
	'Traveller Models'=>array('index'),
	$model->traveller_id=>array('view','id'=>$model->traveller_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TravellerModel', 'url'=>array('index')),
	array('label'=>'Create TravellerModel', 'url'=>array('create')),
	array('label'=>'View TravellerModel', 'url'=>array('view', 'id'=>$model->traveller_id)),
	array('label'=>'Manage TravellerModel', 'url'=>array('admin')),
);
?>

<h1>Update TravellerModel <?php echo $model->traveller_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>