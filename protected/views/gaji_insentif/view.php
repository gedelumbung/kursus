<?php
/* @var $this Gaji_insentifController */
/* @var $model TransaksiPenggajian */

$this->breadcrumbs=array(
	'Transaksi Penggajian'=>array('index'),
	$model->id_transaksi_penggajian,
);

$this->menu=array(
	array('label'=>'Data TransaksiPenggajian', 'url'=>array('index')),
	array('label'=>'Tambah TransaksiPenggajian', 'url'=>array('create')),
	array('label'=>'Edit TransaksiPenggajian', 'url'=>array('update', 'id'=>$model->id_transaksi_penggajian)),
	array('label'=>'Hapus TransaksiPenggajian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_transaksi_penggajian),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View TransaksiPenggajian #<?php echo $model->id_transaksi_penggajian; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_transaksi_penggajian',
		'id_guru',
		'id_program',
		'jumlah_murid_reguler',
		'jumlah_murid_privat',
		'bulan',
		'tahun',
		'created_at',
		'updated_at',
	),
)); ?>

</div>
</div>
