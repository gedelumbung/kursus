<?php
/* @var $this ProgramController */
/* @var $data Program */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_program')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_program), array('view', 'id'=>$data->id_program)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_reguler')); ?>:</b>
	<?php echo CHtml::encode($data->harga_reguler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertemuan_reguler')); ?>:</b>
	<?php echo CHtml::encode($data->pertemuan_reguler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_privat')); ?>:</b>
	<?php echo CHtml::encode($data->harga_privat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertemuan_privat')); ?>:</b>
	<?php echo CHtml::encode($data->pertemuan_privat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>