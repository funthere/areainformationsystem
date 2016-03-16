<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'provinsi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_prov'); ?>
		<?php echo $form->textField($model,'kode_prov'); ?>
		<?php echo $form->error($model,'kode_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_prov'); ?>
		<?php echo $form->textField($model,'nama_prov',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ibu_kota_prov'); ?>
		<?php echo $form->textField($model,'ibu_kota_prov',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ibu_kota_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'koordinat_prov'); ?>
		<?php echo $form->textField($model,'koordinat_prov',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'koordinat_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'polygon_prov'); ?>
		<?php echo $form->textArea($model,'polygon_prov',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'polygon_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luas_prov'); ?>
		<?php echo $form->textField($model,'luas_prov'); ?>
		<?php echo $form->error($model,'luas_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kepadatan_prov'); ?>
		<?php echo $form->textField($model,'kepadatan_prov'); ?>
		<?php echo $form->error($model,'kepadatan_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jlh_kabupaten'); ?>
		<?php echo $form->textField($model,'jlh_kabupaten'); ?>
		<?php echo $form->error($model,'jlh_kabupaten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jlh_kota'); ?>
		<?php echo $form->textField($model,'jlh_kota'); ?>
		<?php echo $form->error($model,'jlh_kota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->