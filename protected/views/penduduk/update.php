<?php
/* @var $this PendudukController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penduduk', 'url'=>array('index')),
	array('label'=>'Create Penduduk', 'url'=>array('create')),
	array('label'=>'View Penduduk', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Penduduk', 'url'=>array('admin')),
);
?>

<h1>Update Penduduk <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>