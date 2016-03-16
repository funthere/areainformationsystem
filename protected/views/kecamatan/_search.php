<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_kec'); ?>
		<?php echo $form->textField($model,'kode_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_kab_kota'); ?>
		<?php echo $form->textField($model,'kode_kab_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kec'); ?>
		<?php echo $form->textField($model,'nama_kec',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ibukota_kec'); ?>
		<?php echo $form->textField($model,'ibukota_kec',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'koordinat_kec'); ?>
		<?php echo $form->textField($model,'koordinat_kec',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'polygon_kec'); ?>
		<?php echo $form->textArea($model,'polygon_kec',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luas_kec'); ?>
		<?php echo $form->textField($model,'luas_kec'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jlh_dealer'); ?>
		<?php echo $form->textField($model,'jlh_dealer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->