<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kecamatan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_kec'); ?>
		<?php echo $form->textField($model,'kode_kec'); ?>
		<?php echo $form->error($model,'kode_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_kab_kota'); ?>
		<?php echo $form->textField($model,'kode_kab_kota'); ?>
		<?php echo $form->error($model,'kode_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kec'); ?>
		<?php echo $form->textField($model,'nama_kec',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ibukota_kec'); ?>
		<?php echo $form->textField($model,'ibukota_kec',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ibukota_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'koordinat_kec'); ?>
		<?php echo $form->textField($model,'koordinat_kec',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'koordinat_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'polygon_kec'); ?>
		<?php echo $form->textArea($model,'polygon_kec',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'polygon_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luas_kec'); ?>
		<?php echo $form->textField($model,'luas_kec'); ?>
		<?php echo $form->error($model,'luas_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jlh_dealer'); ?>
		<?php echo $form->textField($model,'jlh_dealer'); ?>
		<?php echo $form->error($model,'jlh_dealer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->