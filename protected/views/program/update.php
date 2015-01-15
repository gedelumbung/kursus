<?php
/* @var $this ProgramController */
/* @var $model Program */

$this->breadcrumbs=array(
	'Program'=>array('index'),
	$model->id_program=>array('view','id'=>$model->id_program),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Program', 'url'=>array('index')),
	array('label'=>'Tambah Program', 'url'=>array('create')),
	array('label'=>'Detail Program', 'url'=>array('view', 'id'=>$model->id_program)),
);
?>

<h3>Update Program <?php echo $model->id_program; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>