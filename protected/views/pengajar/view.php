<?php
/* @var $this PengajarController */
/* @var $model Pengajar */

$this->breadcrumbs=array(
	'Pengajar'=>array('index'),
	$model->id_pengajar,
);

$this->menu=array(
	array('label'=>'Data Pengajar', 'url'=>array('index')),
	array('label'=>'Tambah Pengajar', 'url'=>array('create')),
	array('label'=>'Edit Pengajar', 'url'=>array('update', 'id'=>$model->id_pengajar)),
	array('label'=>'Hapus Pengajar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengajar),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Pengajar #<?php echo $model->id_pengajar; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pengajar',
		'nama',
		'alamat',
		'created_at',
		'updated_at',
	),
)); ?>

</div>
</div>
