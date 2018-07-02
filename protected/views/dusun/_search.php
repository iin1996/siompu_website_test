<?php
/* @var $this DusunController */
/* @var $model Dusun */
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
		<?php echo $form->label($model,'nama_dusun'); ?>
		<?php echo $form->textField($model,'nama_dusun'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desa_id'); ?>
		<?php echo $form->textField($model,'desa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_rt'); ?>
		<?php echo $form->textField($model,'jumlah_rt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_rw'); ?>
		<?php echo $form->textField($model,'jumlah_rw'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->