<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_prov'); ?>
		<?php echo $form->textField($model,'kode_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_prov'); ?>
		<?php echo $form->textField($model,'nama_prov',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ibu_kota_prov'); ?>
		<?php echo $form->textField($model,'ibu_kota_prov',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'koordinat_prov'); ?>
		<?php echo $form->textField($model,'koordinat_prov',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'polygon_prov'); ?>
		<?php echo $form->textArea($model,'polygon_prov',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_prov'); ?>
		<?php echo $form->textField($model,'luas_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kepadatan_prov'); ?>
		<?php echo $form->textField($model,'kepadatan_prov'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jlh_kabupaten'); ?>
		<?php echo $form->textField($model,'jlh_kabupaten'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jlh_kota'); ?>
		<?php echo $form->textField($model,'jlh_kota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->