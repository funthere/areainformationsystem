<?php
/* @var $this KabupatenKotaController */
/* @var $model KabupatenKota */

$this->breadcrumbs=array(
	'Kabupaten Kotas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KabupatenKota', 'url'=>array('index')),
	array('label'=>'Manage KabupatenKota', 'url'=>array('admin')),
);
?>

<h1>Create KabupatenKota</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>