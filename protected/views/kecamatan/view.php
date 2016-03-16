<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	$model->kode_kec,
);

$this->menu=array(
	array('label'=>'List Kecamatan', 'url'=>array('index')),
	array('label'=>'Create Kecamatan', 'url'=>array('create')),
	array('label'=>'Update Kecamatan', 'url'=>array('update', 'id'=>$model->kode_kec)),
	array('label'=>'Delete Kecamatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_kec),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h1>View Kecamatan #<?php echo $model->kode_kec; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_kec',
		'kode_kab_kota',
		'nama_kec',
		'ibukota_kec',
		'koordinat_kec',
		'polygon_kec',
		'luas_kec',
		'jlh_dealer',
	),
)); ?>
