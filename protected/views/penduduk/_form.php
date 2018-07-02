<?php
/* @var $this PendudukController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penduduk-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_penduduk'); ?>
		<?php echo $form->textField($model,'nama_penduduk',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_penduduk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dusun_id'); ?>
		<?php echo $form->textField($model,'dusun_id'); ?>
		<?php echo $form->error($model,'dusun_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_kk'); ?>
		<?php echo $form->textField($model,'no_kk'); ?>
		<?php echo $form->error($model,'no_kk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_ktp'); ?>
		<?php echo $form->textField($model,'no_ktp'); ?>
		<?php echo $form->error($model,'no_ktp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_menikah'); ?>
		<?php echo $form->textField($model,'status_menikah',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status_menikah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pekerjaan'); ?>
		<?php echo $form->textField($model,'pekerjaan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agama_id'); ?>
		<?php echo $form->textField($model,'agama_id'); ?>
		<?php echo $form->error($model,'agama_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir'); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->textField($model,'jenis_kelamin',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan_terakhir'); ?>
		<?php echo $form->textField($model,'pendidikan_terakhir',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pendidikan_terakhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->