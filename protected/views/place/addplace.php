<?php
/* @var $this PlaceController */
/* @var $model PlaceModel */

$this->breadcrumbs=array(
	'Place Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PlaceModel', 'url'=>array('index')),
	array('label'=>'Manage PlaceModel', 'url'=>array('admin')),
);
?>

<h1>Create PlaceModel</h1>

<?php $this->renderPartial('_addplace', array('model'=>$model)); ?>