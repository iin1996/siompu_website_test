<?php
/* @var $this DusunController */
/* @var $model Dusun */

$this->breadcrumbs=array(
	'Dusuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dusun', 'url'=>array('index')),
	array('label'=>'Manage Dusun', 'url'=>array('admin')),
);
?>

<h1>Create Dusun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>