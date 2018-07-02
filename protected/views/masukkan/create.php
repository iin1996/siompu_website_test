<?php
/* @var $this MasukkanController */
/* @var $model Masukkan */

$this->breadcrumbs=array(
	'Masukkans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Masukkan', 'url'=>array('index')),
	array('label'=>'Manage Masukkan', 'url'=>array('admin')),
);
?>

<h1>Create Masukkan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>