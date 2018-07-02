<?php
/* @var $this WisataController */
/* @var $model Wisata */

$this->breadcrumbs=array(
	'Wisatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wisata', 'url'=>array('index')),
	array('label'=>'Manage Wisata', 'url'=>array('admin')),
);
?>

<h1>Create Wisata</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>