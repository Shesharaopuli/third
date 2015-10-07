<?php
/* @var $this PlaceController */
/* @var $model PlaceModel */

$this->breadcrumbs=array(
	'Place Models'=>array('index'),
	$model->place_id=>array('view','id'=>$model->place_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PlaceModel', 'url'=>array('index')),
	array('label'=>'Create PlaceModel', 'url'=>array('create')),
	array('label'=>'View PlaceModel', 'url'=>array('view', 'id'=>$model->place_id)),
	array('label'=>'Manage PlaceModel', 'url'=>array('admin')),
);
?>

<h1>Update PlaceModel <?php echo $model->place_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>