<?php
/* @var $this TunjanganController */
/* @var $model TransaksiTunjangan */

$this->breadcrumbs=array(
	'Transaksi Tunjangan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data TransaksiTunjangan', 'url'=>array('index')),
);
?>

<h3>Create TransaksiTunjangan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>