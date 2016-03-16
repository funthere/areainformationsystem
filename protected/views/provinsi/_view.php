<?php
/* @var $this ProvinsiController */
/* @var $data Provinsi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_prov')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_prov), array('view', 'id'=>$data->kode_prov)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_prov')); ?>:</b>
	<?php echo CHtml::encode($data->nama_prov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ibu_kota_prov')); ?>:</b>
	<?php echo CHtml::encode($data->ibu_kota_prov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('koordinat_prov')); ?>:</b>
	<?php echo CHtml::encode($data->koordinat_prov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('polygon_prov')); ?>:</b>
	<?php echo CHtml::encode($data->polygon_prov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_prov')); ?>:</b>
	<?php echo CHtml::encode($data->luas_prov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepadatan_prov')); ?>:</b>
	<?php echo CHtml::encode($data->kepadatan_prov); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jlh_kabupaten')); ?>:</b>
	<?php echo CHtml::encode($data->jlh_kabupaten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jlh_kota')); ?>:</b>
	<?php echo CHtml::encode($data->jlh_kota); ?>
	<br />

	*/ ?>

</div>