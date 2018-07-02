<?php
/* @var $this DesaController */
/* @var $model Desa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'potensi_desa'); ?>
		<?php echo $form->textArea($model,'potensi_desa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_desa'); ?>
		<?php echo $form->textField($model,'nama_desa',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kecamatan_id'); ?>
		<?php echo $form->textField($model,'kecamatan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wisata_id'); ?>
		<?php echo $form->textField($model,'wisata_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_wilayah'); ?>
		<?php echo $form->textField($model,'luas_wilayah',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kepdes'); ?>
		<?php echo $form->textField($model,'nama_kepdes',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->