<?php
/* @var $this KabupatenKotaController */
/* @var $model KabupatenKota */

$this->breadcrumbs=array(
	'Kabupaten Kotas'=>array('index'),
	$model->kode_kab_kota,
);

$this->menu=array(
	array('label'=>'List KabupatenKota', 'url'=>array('index')),
	array('label'=>'Create KabupatenKota', 'url'=>array('create')),
	array('label'=>'Update KabupatenKota', 'url'=>array('update', 'id'=>$model->kode_kab_kota)),
	array('label'=>'Delete KabupatenKota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_kab_kota),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KabupatenKota', 'url'=>array('admin')),
);
?>

<h1>View KabupatenKota #<?php echo $model->kode_kab_kota; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_kab_kota',
		'kode_prov',
		'nama_kab_kota',
		'ibukota_kab_kota',
		'koordinat_kab_kota',
		'polygon_kab_kota',
		'luas_kab_kota',
		'populasi_kab_kota',
		'jlh_kecamatan',
		'jlh_desa',
	),
)); ?>
