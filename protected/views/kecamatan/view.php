<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kecamatan', 'url'=>array('index')),
	array('label'=>'Create Kecamatan', 'url'=>array('create')),
	array('label'=>'Update Kecamatan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kecamatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h1>View Kecamatan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_kecamatan',
		'visi_misi',
		'sejarah',
		'total_penduduk',
	),
)); ?>
