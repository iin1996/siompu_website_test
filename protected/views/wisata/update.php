<?php
/* @var $this WisataController */
/* @var $model Wisata */

$this->breadcrumbs=array(
	'Wisatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wisata', 'url'=>array('index')),
	array('label'=>'Create Wisata', 'url'=>array('create')),
	array('label'=>'View Wisata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Wisata', 'url'=>array('admin')),
);
?>

<h1>Update Wisata <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>