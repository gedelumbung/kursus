<?php
/* @var $this TunjanganController */
/* @var $model TransaksiTunjangan */

$this->breadcrumbs=array(
	'Transaksi Tunjangan'=>array('index'),
	$model->id_transaksi_tambahan=>array('view','id'=>$model->id_transaksi_tambahan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data TransaksiTunjangan', 'url'=>array('index')),
	array('label'=>'Tambah TransaksiTunjangan', 'url'=>array('create')),
	array('label'=>'Detail TransaksiTunjangan', 'url'=>array('view', 'id'=>$model->id_transaksi_tambahan)),
);
?>

<h3>Update TransaksiTunjangan <?php echo $model->id_transaksi_tambahan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>