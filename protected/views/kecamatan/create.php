<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kecamatan', 'url'=>array('index')),
	array('label'=>'Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h1>Create Kecamatan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>