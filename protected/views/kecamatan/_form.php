<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kecamatan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kecamatan'); ?>
		<?php echo $form->textField($model,'nama_kecamatan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visi_misi'); ?>
		<?php echo $form->textArea($model,'visi_misi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'visi_misi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sejarah'); ?>
		<?php echo $form->textArea($model,'sejarah',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sejarah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_penduduk'); ?>
		<?php echo $form->textField($model,'total_penduduk'); ?>
		<?php echo $form->error($model,'total_penduduk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->