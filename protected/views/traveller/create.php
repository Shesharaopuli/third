<?php
/* @var $this TravellerController */
/* @var $model TravellerModel */

$this->breadcrumbs=array(
	'Traveller Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TravellerModel', 'url'=>array('index')),
	array('label'=>'Manage TravellerModel', 'url'=>array('admin')),
);
?>

<h1>Create TravellerModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>