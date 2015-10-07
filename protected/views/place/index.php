<?php
/* @var $this PlaceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Place Models',
);

$this->menu=array(
	array('label'=>'Create PlaceModel', 'url'=>array('create')),
	array('label'=>'Manage PlaceModel', 'url'=>array('admin')),
);
?>

<h1>Place Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
