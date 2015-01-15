<?php
/* @var $this TunjanganController */
/* @var $model TransaksiTunjangan */

$this->breadcrumbs=array(
	'Transaksi Tunjangan'=>array('index'),
	$model->id_transaksi_tambahan,
);

$this->menu=array(
	array('label'=>'Data TransaksiTunjangan', 'url'=>array('index')),
	array('label'=>'Tambah TransaksiTunjangan', 'url'=>array('create')),
	array('label'=>'Edit TransaksiTunjangan', 'url'=>array('update', 'id'=>$model->id_transaksi_tambahan)),
	array('label'=>'Hapus TransaksiTunjangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transaksi_tambahan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View TransaksiTunjangan #<?php echo $model->id_transaksi_tambahan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transaksi_tambahan',
		'id_guru',
		'nama_transaksi',
		'bulan',
		'tahun',
		'jumlah',
		'created_at',
		'updated_at',
	),
)); ?>

</div>
</div>
