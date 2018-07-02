<?php
/* @var $this PendudukController */
/* @var $data Penduduk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_penduduk')); ?>:</b>
	<?php echo CHtml::encode($data->nama_penduduk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dusun_id')); ?>:</b>
	<?php echo CHtml::encode($data->dusun_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_kk')); ?>:</b>
	<?php echo CHtml::encode($data->no_kk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_ktp')); ?>:</b>
	<?php echo CHtml::encode($data->no_ktp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_menikah')); ?>:</b>
	<?php echo CHtml::encode($data->status_menikah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_id')); ?>:</b>
	<?php echo CHtml::encode($data->agama_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_hp')); ?>:</b>
	<?php echo CHtml::encode($data->no_hp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikan_terakhir')); ?>:</b>
	<?php echo CHtml::encode($data->pendidikan_terakhir); ?>
	<br />

	*/ ?>

</div>