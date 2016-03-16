<?php
/* @var $this KabupatenKotaController */
/* @var $model KabupatenKota */

$this->breadcrumbs=array(
	'Kabupaten Kotas'=>array('index'),
	$model->kode_kab_kota=>array('view','id'=>$model->kode_kab_kota),
	'Update',
);

$this->menu=array(
	array('label'=>'List KabupatenKota', 'url'=>array('index')),
	array('label'=>'Create KabupatenKota', 'url'=>array('create')),
	array('label'=>'View KabupatenKota', 'url'=>array('view', 'id'=>$model->kode_kab_kota)),
	array('label'=>'Manage KabupatenKota', 'url'=>array('admin')),
);
?>

<h1>Update KabupatenKota <?php echo $model->kode_kab_kota; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>