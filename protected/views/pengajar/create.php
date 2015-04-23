<?php
/* @var $this PengajarController */
/* @var $model Pengajar */

$this->breadcrumbs=array(
	'Pengajar'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Pengajar', 'url'=>array('index')),
);
?>

<h3>Tambah Pengajar</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>