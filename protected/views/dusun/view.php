<?php
/* @var $this DusunController */
/* @var $model Dusun */

$this->breadcrumbs=array(
	'Dusuns'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dusun', 'url'=>array('index')),
	array('label'=>'Create Dusun', 'url'=>array('create')),
	array('label'=>'Update Dusun', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dusun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dusun', 'url'=>array('admin')),
);
?>

<h1>View Dusun #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_dusun',
		'desa_id',
		'jumlah_rt',
		'jumlah_rw',
	),
)); ?>
