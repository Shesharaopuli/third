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
<p style="color:red;"><?php
if(isset($error)){
echo $error;
}?></p>
<h1>Sign Up -Traveller</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>