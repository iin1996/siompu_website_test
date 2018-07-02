<?php
/* @var $this PendudukController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Penduduk', 'url'=>array('index')),
	array('label'=>'Create Penduduk', 'url'=>array('create')),
	array('label'=>'Update Penduduk', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Penduduk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Penduduk', 'url'=>array('admin')),
);
?>

<h1>View Penduduk #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_penduduk',
		'dusun_id',
		'no_kk',
		'no_ktp',
		'alamat',
		'tempat_lahir',
		'status_menikah',
		'pekerjaan',
		'agama_id',
		'tgl_lahir',
		'jenis_kelamin',
		'no_hp',
		'pendidikan_terakhir',
	),
)); ?>
