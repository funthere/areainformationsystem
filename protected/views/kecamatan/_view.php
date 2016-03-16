<?php
/* @var $this KecamatanController */
/* @var $data Kecamatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kec')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_kec), array('view', 'id'=>$data->kode_kec)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kab_kota')); ?>:</b>
	<?php echo CHtml::encode($data->kode_kab_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kec')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ibukota_kec')); ?>:</b>
	<?php echo CHtml::encode($data->ibukota_kec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('koordinat_kec')); ?>:</b>
	<?php echo CHtml::encode($data->koordinat_kec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('polygon_kec')); ?>:</b>
	<?php echo CHtml::encode($data->polygon_kec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luas_kec')); ?>:</b>
	<?php echo CHtml::encode($data->luas_kec); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jlh_dealer')); ?>:</b>
	<?php echo CHtml::encode($data->jlh_dealer); ?>
	<br />

	*/ ?>

</div>