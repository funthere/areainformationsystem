<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	$model->kode_kec=>array('view','id'=>$model->kode_kec),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kecamatan', 'url'=>array('index')),
	array('label'=>'Create Kecamatan', 'url'=>array('create')),
	array('label'=>'View Kecamatan', 'url'=>array('view', 'id'=>$model->kode_kec)),
	array('label'=>'Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h1>Update Kecamatan <?php echo $model->kode_kec; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>