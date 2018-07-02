<?php
/* @var $this DesaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Desas',
);

$this->menu=array(
	array('label'=>'Create Desa', 'url'=>array('create')),
	array('label'=>'Manage Desa', 'url'=>array('admin')),
);
?>

<h1>Desas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
