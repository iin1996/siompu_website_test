<?php
/* @var $this DesaController */
/* @var $model Desa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'desa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'potensi_desa'); ?>
		<?php echo $form->textArea($model,'potensi_desa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'potensi_desa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_desa'); ?>
		<?php echo $form->textField($model,'nama_desa',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_desa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kecamatan_id'); ?>
		<?php echo $form->textField($model,'kecamatan_id'); ?>
		<?php echo $form->error($model,'kecamatan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wisata_id'); ?>
		<?php echo $form->textField($model,'wisata_id'); ?>
		<?php echo $form->error($model,'wisata_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luas_wilayah'); ?>
		<?php echo $form->textField($model,'luas_wilayah',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'luas_wilayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kepdes'); ?>
		<?php echo $form->textField($model,'nama_kepdes',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_kepdes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->