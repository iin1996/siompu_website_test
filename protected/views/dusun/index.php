<?php
/* @var $this DusunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dusuns',
);

$this->menu=array(
	array('label'=>'Create Dusun', 'url'=>array('create')),
	array('label'=>'Manage Dusun', 'url'=>array('admin')),
);
?>

<h1>Dusuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
