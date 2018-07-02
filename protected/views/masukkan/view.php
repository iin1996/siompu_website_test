<?php
/* @var $this MasukkanController */
/* @var $model Masukkan */

$this->breadcrumbs=array(
	'Masukkans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Masukkan', 'url'=>array('index')),
	array('label'=>'Create Masukkan', 'url'=>array('create')),
	array('label'=>'Update Masukkan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Masukkan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Masukkan', 'url'=>array('admin')),
);
?>

<h1>View Masukkan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'email',
		'pesan',
	),
)); ?>
