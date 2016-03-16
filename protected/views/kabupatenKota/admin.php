<?php
/* @var $this KabupatenKotaController */
/* @var $model KabupatenKota */

$this->breadcrumbs=array(
	'Kabupaten Kotas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List KabupatenKota', 'url'=>array('index')),
	array('label'=>'Create KabupatenKota', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kabupaten-kota-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Kabupaten Kotas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kabupaten-kota-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_kab_kota',
		'kode_prov',
		'nama_kab_kota',
		'ibukota_kab_kota',
		'koordinat_kab_kota',
		'polygon_kab_kota',
		/*
		'luas_kab_kota',
		'populasi_kab_kota',
		'jlh_kecamatan',
		'jlh_desa',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
