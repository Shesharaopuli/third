<?php
/* @var $this TravellerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Traveller Models',
);

$this->menu=array(
	array('label'=>'Create TravellerModel', 'url'=>array('create')),
	array('label'=>'Manage TravellerModel', 'url'=>array('admin')),
);
?>

<h1>Traveller Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
