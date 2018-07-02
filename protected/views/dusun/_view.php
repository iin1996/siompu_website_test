<?php
/* @var $this DusunController */
/* @var $data Dusun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dusun')); ?>:</b>
	<?php echo CHtml::encode($data->nama_dusun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desa_id')); ?>:</b>
	<?php echo CHtml::encode($data->desa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_rt')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_rt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_rw')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_rw); ?>
	<br />


</div>