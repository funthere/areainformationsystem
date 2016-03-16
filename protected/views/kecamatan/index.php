<?php
/* @var $this KecamatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kecamatans',
);

$this->menu=array(
	array('label'=>'Create Kecamatan', 'url'=>array('create')),
	array('label'=>'Manage Kecamatan', 'url'=>array('admin')),
);
?>

<h1>Kecamatans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
