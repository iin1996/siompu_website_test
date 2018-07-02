<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kecamatan', 'url'=>array('index')),
	array('label'=>'Create Kecamatan', 'url'=>array('create')),
	array('label'=>'View Kecamatan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h1>Update Kecamatan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>