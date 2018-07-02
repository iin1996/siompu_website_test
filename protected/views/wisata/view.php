<?php
/* @var $this WisataController */
/* @var $model Wisata */

$this->breadcrumbs=array(
	'Wisatas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Wisata', 'url'=>array('index')),
	array('label'=>'Create Wisata', 'url'=>array('create')),
	array('label'=>'Update Wisata', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Wisata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wisata', 'url'=>array('admin')),
);
?>

<h1>View Wisata #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_wisata',
	),
)); ?>
