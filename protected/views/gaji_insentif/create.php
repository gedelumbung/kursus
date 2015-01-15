<?php
/* @var $this Gaji_insentifController */
/* @var $model TransaksiPenggajian */

$this->breadcrumbs=array(
	'Transaksi Penggajian'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data TransaksiPenggajian', 'url'=>array('index')),
);
?>

<h3>Create TransaksiPenggajian</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>