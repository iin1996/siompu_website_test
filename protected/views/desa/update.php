<?php
/* @var $this DesaController */
/* @var $model Desa */

$this->breadcrumbs=array(
	'Desas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Desa', 'url'=>array('index')),
	array('label'=>'Create Desa', 'url'=>array('create')),
	array('label'=>'View Desa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Desa', 'url'=>array('admin')),
);
?>

<h1>Update Desa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>