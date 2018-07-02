<?php
/* @var $this MasukkanController */
/* @var $model Masukkan */

$this->breadcrumbs=array(
	'Masukkans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Masukkan', 'url'=>array('index')),
	array('label'=>'Create Masukkan', 'url'=>array('create')),
	array('label'=>'View Masukkan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Masukkan', 'url'=>array('admin')),
);
?>

<h1>Update Masukkan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>