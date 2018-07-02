<?php
/* @var $this DesaController */
/* @var $data Desa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potensi_desa')); ?>:</b>
	<?php echo CHtml::encode($data->potensi_desa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_desa')); ?>:</b>
	<?php echo CHtml::encode($data->nama_desa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kecamatan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kecamatan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wisata_id')); ?>:</b>
	<?php echo CHtml::encode($data->wisata_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_wilayah')); ?>:</b>
	<?php echo CHtml::encode($data->luas_wilayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kepdes')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kepdes); ?>
	<br />


</div>