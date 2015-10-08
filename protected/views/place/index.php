<?php
/* @var $this PlaceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Place Models',
);

if(UserUtility::isAdmin()){

$this->menu=array(
	array('label'=>'Create PlaceModel', 'url'=>array('create')),
	array('label'=>'Manage PlaceModel', 'url'=>array('admin')),
	array('label'=>'AJAX PlaceModel', 'url'=>array('AddPlaceAjax')),
);
}
?>

<h1>Place Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
