<?php
/* @var $this ProgramController */
/* @var $model Program */

$this->breadcrumbs=array(
	'Program'=>array('index'),
	$model->id_program,
);

$this->menu=array(
	array('label'=>'Data Program', 'url'=>array('index')),
	array('label'=>'Tambah Program', 'url'=>array('create')),
	array('label'=>'Edit Program', 'url'=>array('update', 'id'=>$model->id_program)),
	array('label'=>'Hapus Program', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_program),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Program #<?php echo $model->id_program; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_program',
		'nama',
		'harga_reguler',
		'pertemuan_reguler',
		'harga_privat',
		'pertemuan_privat',
		'created_at',
		'updated_at',
	),
)); ?>

</div>
</div>
