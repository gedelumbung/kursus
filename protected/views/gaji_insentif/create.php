<?php
/* @var $this Gaji_insentifController */
/* @var $model TransaksiPenggajian */

$this->breadcrumbs=array(
	'Transaksi Penggajian'=>array('index'),
	'Tambah',
);

$this->menu=array(
	array('label'=>'Data TransaksiPenggajian', 'url'=>array('index')),
);
?>

<h3>Tambah TransaksiPenggajian</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>