<?php
/* @var $this KabupatenKotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kabupaten Kotas',
);

$this->menu=array(
	array('label'=>'Create KabupatenKota', 'url'=>array('create')),
	array('label'=>'Manage KabupatenKota', 'url'=>array('admin')),
);
?>

<h1>Kabupaten Kotas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
