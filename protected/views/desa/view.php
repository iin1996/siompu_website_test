<?php
/* @var $this DesaController */
/* @var $model Desa */

$this->breadcrumbs=array(
	'Desas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Desa', 'url'=>array('index')),
	array('label'=>'Create Desa', 'url'=>array('create')),
	array('label'=>'Update Desa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Desa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Desa', 'url'=>array('admin')),
);
?>

<h1>View Desa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'potensi_desa',
		'nama_desa',
		'kecamatan_id',
		'wisata_id',
		'luas_wilayah',
		'nama_kepdes',
	),
)); ?>
