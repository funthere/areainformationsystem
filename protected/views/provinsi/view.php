<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsis'=>array('index'),
	$model->kode_prov,
);

$this->menu=array(
	array('label'=>'List Provinsi', 'url'=>array('index')),
	array('label'=>'Create Provinsi', 'url'=>array('create')),
	array('label'=>'Update Provinsi', 'url'=>array('update', 'id'=>$model->kode_prov)),
	array('label'=>'Delete Provinsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_prov),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Provinsi', 'url'=>array('admin')),
);
?>

<h1>View Provinsi #<?php echo $model->kode_prov; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_prov',
		'nama_prov',
		'ibu_kota_prov',
		'koordinat_prov',
		'polygon_prov',
		'luas_prov',
		'kepadatan_prov',
		'jlh_kabupaten',
		'jlh_kota',
	),
)); ?>
