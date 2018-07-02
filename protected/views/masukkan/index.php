<?php
/* @var $this MasukkanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Masukkans',
);

$this->menu=array(
	array('label'=>'Create Masukkan', 'url'=>array('create')),
	array('label'=>'Manage Masukkan', 'url'=>array('admin')),
);
?>

<h1>Masukkans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
