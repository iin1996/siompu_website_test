<?php
/* @var $this DusunController */
/* @var $model Dusun */

$this->breadcrumbs=array(
	'Dusuns'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dusun', 'url'=>array('index')),
	array('label'=>'Create Dusun', 'url'=>array('create')),
	array('label'=>'View Dusun', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dusun', 'url'=>array('admin')),
);
?>

<h1>Update Dusun <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>