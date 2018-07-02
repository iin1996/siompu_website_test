<?php
/* @var $this KecamatanController */
/* @var $data Kecamatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kecamatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visi_misi')); ?>:</b>
	<?php echo CHtml::encode($data->visi_misi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sejarah')); ?>:</b>
	<?php echo CHtml::encode($data->sejarah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_penduduk')); ?>:</b>
	<?php echo CHtml::encode($data->total_penduduk); ?>
	<br />


</div>