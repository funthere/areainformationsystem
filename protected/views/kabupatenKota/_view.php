<?php
/* @var $this KabupatenKotaController */
/* @var $data KabupatenKota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kab_kota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_kab_kota), array('view', 'id'=>$data->kode_kab_kota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_prov')); ?>:</b>
	<?php echo CHtml::encode($data->kode_prov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kab_kota')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kab_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ibukota_kab_kota')); ?>:</b>
	<?php echo CHtml::encode($data->ibukota_kab_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('koordinat_kab_kota')); ?>:</b>
	<?php echo CHtml::encode($data->koordinat_kab_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('polygon_kab_kota')); ?>:</b>
	<?php echo CHtml::encode($data->polygon_kab_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_kab_kota')); ?>:</b>
	<?php echo CHtml::encode($data->luas_kab_kota); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('populasi_kab_kota')); ?>:</b>
	<?php echo CHtml::encode($data->populasi_kab_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jlh_kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->jlh_kecamatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jlh_desa')); ?>:</b>
	<?php echo CHtml::encode($data->jlh_desa); ?>
	<br />

	*/ ?>

</div>