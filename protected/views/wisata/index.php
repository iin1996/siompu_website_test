<?php
/* @var $this WisataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wisatas',
);

$this->menu=array(
	array('label'=>'Create Wisata', 'url'=>array('create')),
	array('label'=>'Manage Wisata', 'url'=>array('admin')),
);
?>

<h1>Wisatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
