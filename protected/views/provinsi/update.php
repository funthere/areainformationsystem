<?php
/* @var $this ProvinsiController */
/* @var $model Provinsi */

$this->breadcrumbs=array(
	'Provinsis'=>array('index'),
	$model->kode_prov=>array('view','id'=>$model->kode_prov),
	'Update',
);

$this->menu=array(
	array('label'=>'List Provinsi', 'url'=>array('index')),
	array('label'=>'Create Provinsi', 'url'=>array('create')),
	array('label'=>'View Provinsi', 'url'=>array('view', 'id'=>$model->kode_prov)),
	array('label'=>'Manage Provinsi', 'url'=>array('admin')),
);
?>

<h1>Update Provinsi <?php echo $model->kode_prov; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>