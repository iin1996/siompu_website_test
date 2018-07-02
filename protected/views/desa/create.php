<?php
/* @var $this DesaController */
/* @var $model Desa */

$this->breadcrumbs=array(
	'Desas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Desa', 'url'=>array('index')),
	array('label'=>'Manage Desa', 'url'=>array('admin')),
);
?>

<h1>Create Desa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>