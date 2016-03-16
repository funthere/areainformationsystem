<?php
/* @var $this KabupatenKotaController */
/* @var $model KabupatenKota */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_kab_kota'); ?>
		<?php echo $form->textField($model,'kode_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_prov'); ?>
		<?php echo $form->textField($model,'kode_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kab_kota'); ?>
		<?php echo $form->textField($model,'nama_kab_kota',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ibukota_kab_kota'); ?>
		<?php echo $form->textField($model,'ibukota_kab_kota',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'koordinat_kab_kota'); ?>
		<?php echo $form->textField($model,'koordinat_kab_kota',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'polygon_kab_kota'); ?>
		<?php echo $form->textArea($model,'polygon_kab_kota',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_kab_kota'); ?>
		<?php echo $form->textField($model,'luas_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'populasi_kab_kota'); ?>
		<?php echo $form->textField($model,'populasi_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jlh_kecamatan'); ?>
		<?php echo $form->textField($model,'jlh_kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jlh_desa'); ?>
		<?php echo $form->textField($model,'jlh_desa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->