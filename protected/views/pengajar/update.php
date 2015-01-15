<?php
/* @var $this PengajarController */
/* @var $model Pengajar */

$this->breadcrumbs=array(
	'Pengajar'=>array('index'),
	$model->id_pengajar=>array('view','id'=>$model->id_pengajar),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Pengajar', 'url'=>array('index')),
	array('label'=>'Tambah Pengajar', 'url'=>array('create')),
	array('label'=>'Detail Pengajar', 'url'=>array('view', 'id'=>$model->id_pengajar)),
);
?>

<h3>Update Pengajar <?php echo $model->id_pengajar; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>