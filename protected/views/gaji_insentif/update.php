<?php
/* @var $this Gaji_insentifController */
/* @var $model TransaksiPenggajian */

$this->breadcrumbs=array(
	'Transaksi Penggajian'=>array('index'),
	$model->id_transaksi_penggajian=>array('view','id'=>$model->id_transaksi_penggajian),
	'Update',
);

$this->menu=array(
	array('label'=>'Data TransaksiPenggajian', 'url'=>array('index')),
	array('label'=>'Tambah TransaksiPenggajian', 'url'=>array('create')),
	array('label'=>'Detail TransaksiPenggajian', 'url'=>array('view', 'id'=>$model->id_transaksi_penggajian)),
);
?>

<h3>Update TransaksiPenggajian <?php echo $model->id_transaksi_penggajian; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>