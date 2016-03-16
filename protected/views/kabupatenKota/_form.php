<?php
/* @var $this KabupatenKotaController */
/* @var $model KabupatenKota */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kabupaten-kota-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_kab_kota'); ?>
		<?php echo $form->textField($model,'kode_kab_kota'); ?>
		<?php echo $form->error($model,'kode_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_prov'); ?>
		<?php echo $form->textField($model,'kode_prov'); ?>
		<?php echo $form->error($model,'kode_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kab_kota'); ?>
		<?php echo $form->textField($model,'nama_kab_kota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ibukota_kab_kota'); ?>
		<?php echo $form->textField($model,'ibukota_kab_kota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ibukota_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'koordinat_kab_kota'); ?>
		<?php echo $form->textField($model,'koordinat_kab_kota',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'koordinat_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'polygon_kab_kota'); ?>
		<?php echo $form->textArea($model,'polygon_kab_kota',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'polygon_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luas_kab_kota'); ?>
		<?php echo $form->textField($model,'luas_kab_kota'); ?>
		<?php echo $form->error($model,'luas_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'populasi_kab_kota'); ?>
		<?php echo $form->textField($model,'populasi_kab_kota'); ?>
		<?php echo $form->error($model,'populasi_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jlh_kecamatan'); ?>
		<?php echo $form->textField($model,'jlh_kecamatan'); ?>
		<?php echo $form->error($model,'jlh_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jlh_desa'); ?>
		<?php echo $form->textField($model,'jlh_desa'); ?>
		<?php echo $form->error($model,'jlh_desa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->